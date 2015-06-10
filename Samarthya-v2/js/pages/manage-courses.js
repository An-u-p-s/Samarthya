/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var coursesList;
   
      function managecoursesload()
      {
          var result;
          $.ajax({type: "GET", 
                                    async: false,
                                    url: 'php/dac.courses.php',
                                    data: { 
                                        action : 'courseListOnly',
                                    },
                                    success: function(resp)
                                    {
                                          result=resp;
                                    }
                                   });
                                   var res=JSON.parse(result);
          coursesList=res;
          viewLeftMenu1();
          
      }
      
      function viewLeftMenu1()
      {
          document.getElementById("leftMenuContainer1").style.display='block';
          document.getElementById("leftMenuContainer2").style.display='none';
          document.getElementById("leftMenuContainer3").style.display='none';
          document.getElementById("leftMenuContainer4").style.display='none';
          adminGetCourseList();
          $("#leftMenu-1").addClass("active");
          $("#leftMenu-2").removeClass("active");
          $("#leftMenu-3").removeClass("active");
          $("#leftMenu-4").removeClass("active");
      }
      
      function courseEdit(idCourses, courseName, courseNumber)
      {
          
         document.getElementById("idCourses").value=idCourses;
         document.getElementById("courseOperation").value='Edit';
         document.getElementById("courseHeading").innerHTML='<B>Edit a Course</B>';
         document.getElementById("leftMenuContainer2").style.display='block';
         document.getElementById("add-courseName").value=courseName;
         document.getElementById("add-courseNumber").value=courseNumber;
         document.getElementById("courseBttn").value='Edit Course';
         
      }
      
      function adminGetCourseList()
        {
             var res=coursesList;
                 
               console.log("courses : "+JSON.stringify(res));
           
               var content='<table class="table table-responsiv table-bordered">';
                   content+='<thead>';
                   content+='<tr>';
                   content+='<th>S. No.</th>';
                   content+='<th>Course Name</th>';
                   content+='<th>Course Number</th>';
                   content+='<th>Actions</th>';
                   content+='</tr>';
                   content+='</thead>';
                   content+='<tbody>';
                  
                  for(var index=0;index<res.length;index++)
                  {
                      content+='<tr>'
                      content+='<td>'+(index+1)+'</td>';
                      content+='<td>'+res[index].courseName+'</td>';
                      content+='<td>'+res[index].courseNumber+'</td>';
                      content+='<td>';
                      content+='<input type="button" class="btn btn-primary" value="Edit" onclick=\"courseEdit(\''+res[index].idCourses+'\',\''+res[index].courseName+'\',\''+res[index].courseNumber+'\')\"/>';
                      content+='<input type="button" class="btn btn-danger" value="Delete" onclick=\"courseDelete(\''+res[index].idCourses+'\');\"/>';
                      content+='</td>';
                     
                      content+='</tr>'
                  }
                  
                   content+='</tbody>';
                   content+='</table>';
                   content+='</div>';
                   
                   document.getElementById("leftMenuContainer1").innerHTML=content;
        }
      
      function courseDelete(idCourses)
      {
          var result="";
                 $.ajax({type: "GET", 
                                    async: false,
                                    url: 'php/dac.courses.php',
                                    data: { 
                                        action : 'DeleteCourse',
                                        idCourses :idCourses,
                                       
                                    },
                                    success: function(resp)
                                    {
                                          result=resp;
                                    }
                                   });
               console.log("answers : "+result);
            window.location.href='manage-courses.php';
      }
      
      
      function viewLeftMenu2()
      {
          /* Refreshing Form into Add Form */
          document.getElementById("courseOperation").value='Add';
          document.getElementById("courseHeading").innerHTML='<B>Add a Course</B>';
          document.getElementById("add-courseName").value='';
          document.getElementById("add-courseNumber").value='';
          document.getElementById("courseBttn").value='Add Course';
          
          document.getElementById("leftMenuContainer1").style.display='none';
          document.getElementById("leftMenuContainer2").style.display='block';
          document.getElementById("leftMenuContainer3").style.display='none';
          document.getElementById("leftMenuContainer4").style.display='none';
          
          $("#leftMenu-1").removeClass("active");
          $("#leftMenu-2").addClass("active");
          $("#leftMenu-3").removeClass("active");
          $("#leftMenu-4").removeClass("active");
      }
     
      function viewLeftMenu3()
      {
          document.getElementById("leftMenuContainer1").style.display='none';
          document.getElementById("leftMenuContainer2").style.display='none';
          document.getElementById("leftMenuContainer3").style.display='block';
          document.getElementById("leftMenuContainer4").style.display='none';
          
          // Dynamic Menu
          
          var courseListing=document.getElementById("view-courseName1");
          var p_option = document.createElement("option");
			 p_option.id = "";
			p_option.text = "Select a Course";
			p_option.value = "";
			courseListing.add(p_option);
            var res=coursesList;
            for(var ind=0;ind<res.length;ind++)
           {
                var option = document.createElement("option");
			option.id = res[ind].courseName;
			option.text = res[ind].courseName;
			option.value = res[ind].idCourses;
			courseListing.add(option);
               console.log("courseName : "+res[ind].courseName);
           }
            
            
          $("#leftMenu-1").removeClass("active");
          $("#leftMenu-2").removeClass("active");
          $("#leftMenu-3").addClass("active");
          $("#leftMenu-4").removeClass("active");
      }
     
      function viewLeftMenu4()
      {
          document.getElementById("leftMenuContainer1").style.display='none';
          document.getElementById("leftMenuContainer2").style.display='none';
          document.getElementById("leftMenuContainer3").style.display='none';
          document.getElementById("leftMenuContainer4").style.display='block';
          
          //
           document.getElementById("coursedetailsOperation").value='Add';
          document.getElementById("alreadyShow").style.display='none';
          document.getElementById("courseDetailHeading").innerHTML='<B>Add Course Details</B>';
          document.getElementById("view-courseName2-label").style.display='block';
          document.getElementById("view-courseName2").style.display='block';
          document.getElementById("leftMenuContainer4").style.display='block';
          document.getElementById("CourseDetailsBttn").value='Add Course Details';
          
          
           // Dynamic Menu
          
          var courseListing=document.getElementById("view-courseName2");
          var p_option = document.createElement("option");
			 p_option.id = "";
			p_option.text = "Select a Course";
			p_option.value = "";
			courseListing.add(p_option);
            var res=coursesList;
            for(var ind=0;ind<res.length;ind++)
           {
                var option = document.createElement("option");
			option.id = res[ind].courseName;
			option.text = res[ind].courseName;
			option.value = res[ind].idCourses;
			courseListing.add(option);
               console.log("courseName : "+res[ind].courseName);
           }
            
          
          
          $("#leftMenu-1").removeClass("active");
          $("#leftMenu-2").removeClass("active");
          $("#leftMenu-3").removeClass("active");
          $("#leftMenu-4").addClass("active");
      }
      
       function videoPreview1()
       {
           var url=document.getElementById("addcourse-EngVideoLink").value;;
           window.open(url);
       }
      
       function videoPreview2()
       {
           var url=document.getElementById("addcourse-HinVideoLink").value;;
           window.open(url);
       }
      
       function videoPreview3()
       {
           var url=document.getElementById("addcourse-TelVideoLink").value;;
           window.open(url); 
       }
      
      
      
      function EditCourseDetails(idCourseLinks, courseName, title, engvideo, hindivideo, teluguvideo, engPDF)
      {
          
           document.getElementById("video-preview1").style.display='block';
           document.getElementById("video-preview2").style.display='block';
           document.getElementById("video-preview3").style.display='block';
           document.getElementById("idCourseLinks").value=idCourseLinks;
           document.getElementById("coursedetailsOperation").value='Edit';
           document.getElementById("addcourse-titleName").value=title;
           document.getElementById("addcourse-EngVideoLink").value=engvideo;
           document.getElementById("addcourse-HinVideoLink").value=hindivideo;
           document.getElementById("addcourse-TelVideoLink").value=teluguvideo;
           document.getElementById("setCourseName").value=courseName;
          
          
          if(engPDF.length>0)
          {
              document.getElementById("existingFile").innerHTML='<B>'+engPDF+'</B>';
          }
          else
          {
              document.getElementById("existingFile").innerHTML='<B>No File is uploaded Before</B>';
          }
          
          
          
          document.getElementById("courseDetailHeading").innerHTML='<B>Edit Course Details</B>';
          document.getElementById("view-courseName2-label").style.display='none';
          document.getElementById("view-courseName2").style.display='none';
          document.getElementById("leftMenuContainer4").style.display='block';
          document.getElementById("CourseDetailsBttn").value='Edit Course Details';
          

      }
      
      
      
      function deleteCourseDetails(idCourseLinks, courseName, title)
      {
          var result="";
                 $.ajax({type: "GET", 
                                    async: false,
                                    url: 'php/dac.courses.php',
                                    data: { 
                                        action : 'DeleteCourseDetails',
                                        idCourseLinks :idCourseLinks,
                                        courseName:courseName,
                                        title:title
                                    },
                                    success: function(resp)
                                    {
                                          result=resp;
                                    }
                                   });
               console.log("answers : "+result);
            window.location.href='manage-courses.php';
      }
      
      
      function viewCourseDetails()
      {
          var courseName=document.getElementById("view-courseName1").value;
           var result="";
                 $.ajax({type: "GET", 
                                    async: false,
                                    url: 'php/dac.courses.php',
                                    data: { 
                                        action : 'viewCourseDetails',
                                        courseID :courseName,
                                       
                                    },
                                    success: function(resp)
                                    {
                                          result=resp;
                                    }
                                   });
               console.log("answers : "+result);
          
          var res=JSON.parse(result);
          var content='<table class="table table-responsiv table-bordered">';
                   content+='<thead>';
                   content+='<tr>';
                   content+='<th align="center" style="width:10%;">S. No.</th>';
                   content+='<th align="center" >Title Name</th>';
                   content+='<th align="center" style="width:20%;">Actions</th>';
                   content+='</tr>';
                   content+='</thead>';
                   content+='<tbody>';
                  
                  for(var index=0;index<res.length;index++)
                  {
                      var idCourseLinks=res[index].idCourseLinks;
           
                      content+='<tr>'
                      content+='<td>'+(index+1)+'</td>';
                      content+='<td>'+res[index].title+'</td>';
                      content+='<td>';
                      content+='<input type="button" class="btn btn-primary" value="Edit" ';
                      content+=' onclick="EditCourseDetails(\''+idCourseLinks+'\',\''+courseName+'\',\''+res[index].title+'\', \''+res[index].courseEngVideoLink+'\',\''+res[index].courseHindiVideoLink+'\',\''+res[index].courseTeluguVideoLink+'\',\''+res[index].courseEngPDFLink+'\')"/>';
                      content+='<input type="button" class="btn btn-danger" value="Delete" onclick="deleteCourseDetails(\''+res[index].idCourseLinks+'\', \''+res[index].courseID+'\', \''+res[index].title+'\');"/>';
                      content+='</td>';
                      content+='</tr>'
                  }
                  
                   content+='</tbody>';
                   content+='</table>';
                   content+='</div>';
                   document.getElementById("view-courseDetails").style.display='block';
                   document.getElementById("view-courseDetails").innerHTML=content;
      }
      
      function addNewCourse()
      {
            var operation=document.getElementById("courseOperation").value;
            var courseName=document.getElementById("add-courseName").value;
            var courseNumber=document.getElementById("add-courseNumber").value;
          
          console.log("courseName : "+courseName);
          console.log("courseNumber : "+courseNumber);
          
          if(operation=='Add')
          {
              var result="";
                $.ajax({type: "GET", 
                                    async: false,
                                    url: 'php/dac.courses.php',
                                    data: { 
                                        courseName:courseName,
                                        courseNumber:courseNumber,
                                        action : 'AddNewCourses'
                                    },
                                  success: function(resp)
                                    {
                                          result=resp;
                                    }
                                   });
                        console.log("Res : "+result);
          }
          else
          {
              var idCourses=document.getElementById("idCourses").value;
                var result="";
                $.ajax({type: "GET", 
                                    async: false,
                                    url: 'php/dac.courses.php',
                                    data: { 
                                        idCourses:idCourses,
                                        courseName:courseName,
                                        courseNumber:courseNumber,
                                        action : 'EditNewCourses'
                                    },
                                  success: function(resp)
                                    {
                                          result=resp;
                                    }
                                   });
                        console.log("Res : "+result);
          }
        //   viewLeftMenu1();    
         window.location.href='manage-courses.php';         
          // document.getElementById("add-courseName").value="";
         //  document.getElementById("add-courseNumber").value="";             
      }
      
      
      


