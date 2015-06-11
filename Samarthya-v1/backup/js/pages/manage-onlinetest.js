/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

 var coursesList;
   
      /* This function invokes on Manage-onlinetest.php loads */
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
                                   console.log(result);
                                   var res=JSON.parse(result);
          coursesList=res;
          viewLeftMenu1();  /* Displays first Menu */
          
      }
      
     
      function adminGetCourseList()
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
                 
                 
                 
                 
               console.log("courses : "+res);
           
        }
      
     
      /* Menu 1 : Manage Examination */
       function viewLeftMenu1()
       {
          document.getElementById("leftMenuContainer1").style.display='block';
         /* document.getElementById("leftMenuContainer2").style.display='none';
          document.getElementById("leftMenuContainer3").style.display='none';
          document.getElementById("leftMenuContainer4").style.display='block'; */
          
          $("#leftMenu-1").removeClass("active");
          $("#leftMenu-2").addClass("active");
          
          // View viewTestDetailsTable
           
          // Build Dynamic Course-List
          
          var courseListing=document.getElementById("view-OnlineTest-courseName");
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
			option.value = res[ind].courseName;
			courseListing.add(option);
               console.log("courseName : "+res[ind].courseName);
           }
       }
      
      function viewTestDetailsTable()
      {
          document.getElementById("viewTestDetailsTable").style.display='block';
          var onlinecourseName=document.getElementById("view-OnlineTest-courseName").value;
          
             var result="";
                 $.ajax({type: "GET", 
                                    async: false,
                                    url: 'php/dac.questions.php',
                                    data: { 
                                        action : 'TestDetailsByTest',
                                       courseName : onlinecourseName,
                                      
                                    },
                                    success: function(resp)
                                    {
                                          result=resp;
                                    }
                                   });
               console.log("Pre Data : "+result);
               
              result=JSON.parse(result);
               //  
               var content='<table class="table table-responsiv table-bordered">';
                   content+='<thead>';
                   content+='<tr>';
                   content+='<th>S. No.</th>';
                   content+='<th>Type of Test</th>';
                   content+='<th>Test Duration</th>';
                   content+='<th>Total Questions</th>';
                   content+='<th>Total Marks</th>';
                   content+='<th>Pass Marks</th>';
                   content+='<th>Actions</th>';
                   content+='</tr>';
                   content+='</thead>';
                   content+='<tbody>';
                  
              for(var index=0;index<result.length;index++)
              {
                  console.log(result[index].testName);
                  console.log(result[index].testType);
                  console.log(result[index].testTime);
                  console.log("Question :"+result[index].totalquestions+" Decode Question: "+decodeURI(result[index].totalquestions));
                  console.log(result[index].totalmarks);
                  console.log(result[index].passMarks);
                  
                   content+='<tr>';
                   content+='<td>'+(index+1)+'</td>';
                   content+='<th>'+result[index].testType+'</th>';
                   content+='<th>'+result[index].testTime+'</th>';
                   content+='<th>'+result[index].totalquestions+'</th>';
                   content+='<th>'+result[index].totalmarks+'</th>';
                   content+='<th>'+result[index].passMarks+'</th>';
                   content+='<th style="width:21%">';
                   content+='<input type="button" class="btn btn-primary" value="Edit"';
                   content+=' onclick="manageAddEditTestDetails(\'Edit\',\''+result[index].testType+'\',\''+result[index].testTime+'\',\''+result[index].totalquestions+'\',\''+result[index].totalmarks+'\',\''+result[index].passMarks+'\')"/>';
                   content+='<input type="button" class="btn btn-danger" value="Delete"/>';
                   content+='</th>';
                   content+='</tr>';
              }
              content+='</tbody>';
              content+='</table>';
              
              content+='<div class="col-xs-12">';
              content+='<input type="button" id="Bttn_AddExamDetails" class="btn btn-success pull-right" value="Add Exam Details" onclick="manageAddEditTestDetails(\'Add\',\'\',\'\',\'\',\'\',\'\')"/>';          
              content+='</div>';
              
              document.getElementById("viewTestDetailsTable").innerHTML=content;
           
              
              
      }
      
      function manageAddEditTestDetails(operate,testType,testTime,totalquestions,totalmarks,passMarks)
      {
          document.getElementById("Add_viewExamDetails").style.display='block';
          document.getElementById("AddViewExamDetails_TestType").value=testType;
          
          // Split by ';'
          var array=testTime.split(":");
          
          document.getElementById("AddViewExamDetails_TestDurationHour").value=array[0];
          document.getElementById("AddViewExamDetails_TestDurationMinute").value=array[1];
          document.getElementById("AddViewExamDetails_TestDurationSecond").value=array[2];
          
          document.getElementById("AddViewExamDetails_TotalQuestion").value=totalquestions;
          document.getElementById("AddViewExamDetails_TotalMarks").value=totalmarks;
          document.getElementById("AddViewExamDetails_PassMarks").value=passMarks;
          
          if(operate==='Add')
          {
               document.getElementById("operation_mode").value='Add';
              document.getElementById("AddViewExamDetails_header").innerHTML='<B>Add Examination Details</B>';
              document.getElementById("AddViewExamDetails_submit").value='Add Exam Details';
              
              
          }
          else if(operate==='Edit')
          {
            document.getElementById("operation_mode").value='Edit';
            document.getElementById("AddViewExamDetails_header").innerHTML='<B>Edit Examination Details</B>';  
            document.getElementById("AddViewExamDetails_submit").value='Edit Exam Details';
            
          }
      }
      
      function addupdateExamDetails()
      {
          // 
         
         var courseName=document.getElementById("view-OnlineTest-courseName").value;
          var mode=document.getElementById("operation_mode").value;
          var testype=document.getElementById("AddViewExamDetails_TestType").value;
          
          var testDurationHour=document.getElementById("AddViewExamDetails_TestDurationHour").value;
          var testDurationMin=document.getElementById("AddViewExamDetails_TestDurationMinute").value;
          var testDurationSec=document.getElementById("AddViewExamDetails_TestDurationSecond").value;
          
          if(testDurationHour.length==1)  { testDurationHour="0"+testDurationHour; }
          if(testDurationMin.length==1)  { testDurationMin="0"+testDurationMin; }
          if(testDurationSec.length==1)  { testDurationSec="0"+testDurationSec; }
          
          if(testDurationHour.length==0)  { document.getElementById("AddViewExamDetails_TestDurationHour").value="00"; }
          if(testDurationMin.length==0)  { document.getElementById("AddViewExamDetails_TestDurationMinute").value="00"; }
          if(testDurationSec.length==0)  { document.getElementById("AddViewExamDetails_TestDurationSecond").value="00"; }
            
            testDurationHour=document.getElementById("AddViewExamDetails_TestDurationHour").value;
            testDurationMin=document.getElementById("AddViewExamDetails_TestDurationMinute").value;
            testDurationSec=document.getElementById("AddViewExamDetails_TestDurationSecond").value;
            
          var testDuration=testDurationHour+":"+testDurationMin+":"+testDurationSec;
          
          var totalQuestions=document.getElementById("AddViewExamDetails_TotalQuestion").value;
          var totalMarks=document.getElementById("AddViewExamDetails_TotalMarks").value;
          var passMarks=document.getElementById("AddViewExamDetails_PassMarks").value;
     
     
     
     
           console.log("mode : "+mode);
           console.log("courseName : "+courseName);
           console.log("testype : "+testype);
           console.log("testDuration : "+testDuration);
           console.log("totalQuestions : "+totalQuestions);
           console.log("totalMarks : "+totalMarks);
           console.log("passMarks : "+passMarks);
           
             // Validation ::
           if(testype.length==0)
           {
                popupLogoutOpen();
                var content='<B>Please Select the Type of Test.</B>';
                document.getElementById("popLogoutcontent").innerHTML=content;
           }
           
           else if(testDurationHour.length==0 || testDurationMin==0)
           {
               popupLogoutOpen();
               var content='<B>Please Enter the Test Duration.</B>';
               document.getElementById("popLogoutcontent").innerHTML=content;
           }
           
           else if(totalQuestions.length==0)
           {
                popupLogoutOpen();
               var content='<B>Please Enter the total number of Questions.</B>';
               document.getElementById("popLogoutcontent").innerHTML=content;
           }
           
           else if(totalMarks.length==0)
           {
                popupLogoutOpen();
               var content='<B>Please Enter the total Marks.</B>';
               document.getElementById("popLogoutcontent").innerHTML=content;
           }
           
           else if(passMarks.length==0)
           {
                popupLogoutOpen();
               var content='<B>Please Enter the Test Pass Marks.</B>';
               document.getElementById("popLogoutcontent").innerHTML=content;
           }
           else
           {
                
                if(mode=='Add')
                {
                    // Add to Table
                    
                }
                else if(mode=='Edit')
                {

                }
           }
           
           
        
         
          
      }
      
      
        function AddQuestionOnSubmit()
        {
            var courseList=document.getElementById("courseList").value;
            
            var test=[];
            var answer;
            var c_preTest=document.getElementById("C_PreTest");
            var c_postTest=document.getElementById("C_PostTest");
            
            var addQuestion=document.getElementById("AddQuestion");
            var t_option1=document.getElementById("T_Option1");
            var t_option2=document.getElementById("T_Option2");
            var t_option3=document.getElementById("T_Option3");
            var t_option4=document.getElementById("T_Option4");
            
            var c_option1=document.getElementById("C_Option1");
            var c_option2=document.getElementById("C_Option2");
            var c_option3=document.getElementById("C_Option3");
            var c_option4=document.getElementById("C_Option4");
            
            var act=document.getElementById("activeQuestion");
            var active='0';
            
            if(act.checked)
            {
                active='1';
            }
            
            if(c_preTest.checked)
            {
               test.push(c_preTest.value); 
            }
            if(c_postTest.checked)
            {
               test.push(c_postTest.value); 
            }
            
            if(c_option1.checked)
            {
               answer=t_option1.value;
            }
            if(c_option2.checked)
            {
               answer=t_option2.value;
            }
             if(c_option3.checked)
            {
               answer=t_option3.value;
            }
             if(c_option4.checked)
            {
               answer=t_option4.value;
            }
            
            console.log("courseList : "+courseList);
            console.log("test : "+test);
            console.log("addQuestion : "+addQuestion.value); 
            console.log("t_option1 : "+t_option1.value);
            console.log("t_option2 : "+t_option2.value);
            console.log("t_option3 : "+t_option3.value);
            console.log("t_option4 : "+t_option4.value);
            console.log("answer : "+answer);
            
            // AdminAddQuestions
            
             var result="";
                 $.ajax({type: "GET", 
                                    async: false,
                                    url: 'php/dac.questions.php',
                                    data: { 
                                        action : 'AdminAddQuestions',
                                        courseList : courseList,
                                        testList:test,
                                        addQuestion : addQuestion.value,
                                        t_option1:t_option1.value,
                                        t_option2 : t_option2.value,
                                        t_option3 : t_option3.value,
                                        t_option4 : t_option4.value,
                                        answer : answer,
                                        active : active
                                    },
                                    success: function(resp)
                                    {
                                          result=resp;
                                    }
                                   });
               console.log("Data : "+result);
            
            // Clear Fields
             c_preTest.checked=false;
             c_postTest.checked=false;
            
             addQuestion.value='';
             t_option1.value='';
             t_option2.value='';
             t_option3.value='';
             t_option4.value='';
            
             c_option1.checked=false;
             c_option2.checked=false;
             c_option3.checked=false;
             c_option4.checked=false;
            
            
            viewLeftMenu1();
        }
      
      
                 function viewExamination()
                    {
                        var courseName=document.getElementById("view-courseName");
                        var preTest=document.getElementById("view_C_PreTest");
                        var postTest=document.getElementById("view_C_PostTest");
                        
                        var test='';
                        if(preTest.checked)
                        {
                            test=preTest.value;
                        }
                        if(postTest.checked)
                        {
                            test=postTest.value;
                        }
                        
                        if(courseName.value.length>0)
                        {
                             console.log("courseName : "+courseName.value);
                             console.log("test : "+test);
                             
                             // Generate Dynamic Table
                             document.getElementById("leftMenuTable1").style.display='block';
                              var result="";
                                $.ajax({type: "GET", 
                                                    async: false,
                                                    url: 'php/dac.questions.php',
                                                    data: { 

                                                        course :courseName.value,
                                                        test:test,
                                                        action : 'viewQuestions'
                                                    },
                                                  success: function(resp)
                                                    {
                                                          result=resp;
                                                    }
                                                   });
                                        console.log("Res : "+result);
                                   
                                   var res=JSON.parse(result);
                                   
                                   
                             //  class="table table-responsiv table-bordered"  
                             /*
               var content='<table style="width:100px;border:1px solid #000;">';
                   content+='<thead>';
                   content+='<tr style="border:1px solid #000;">';
                   content+='<th  style="border:1px solid #000;">S. No.</th>';
                   content+='<th  style="border:1px solid #000;">Test Type</th>';
                   content+='<th style="border:1px solid #000;">Question</th>';
                   content+='<th style="border:1px solid #000;">Option1</th>';
                   content+='<th style="border:1px solid #000;">Option2</th>';
                   content+='<th style="border:1px solid #000;">Option3</th>';
                   content+='<th style="border:1px solid #000;">Option4</th>';
                   content+='<th style="border:1px solid #000;">Answer</th>';
                   content+='<th style="border:1px solid #000;">Active</th>';
                   content+='</tr>';
                   content+='</thead>';
                   content+='<tbody>';
                  
                  
                           
                                   for(var ind=0;ind<res.length;ind++)
                                   {
                                       
                                        content+='<tr  style="border:1px solid #000;">';
                                        content+='<td  style="border:1px solid #000;">'+(ind+1)+'</td>';
                                        content+='<td  style="border:1px solid #000;">'+res[ind].testType+'</td>';
                                        content+='<td  style="width:40px;border:1px solid #000;">'+res[ind].question+'</td>';
                                        content+='<td  style="border:1px solid #000;">'+res[ind].option1+'</td>';
                                        content+='<td  style="border:1px solid #000;">'+res[ind].option2+'</td>';
                                        content+='<td  style="border:1px solid #000;">'+res[ind].option3+'</td>';
                                        content+='<td  style="border:1px solid #000;">'+res[ind].option4+'</td>';
                                        content+='<td  style="border:1px solid #000;">'+res[ind].answer+'</td>';
                                        content+='<td  style="border:1px solid #000;">'+res[ind].active+'</td>';
                                        content+='</tr>'
                                    
                                        
                                   }
                                  
                                  
                                  
                   content+='</tbody>';
                   content+='</table>';
                   content+='</div>';
                                   */
                   // Data Table
                   
                     var  table=$('#adminviewuserdetails').dataTable( {
                   
        	 "ajax":'php/dac.questions.php?action=GetTestQuestionstoDataTables',
			//  "scrollY": "400px",
    
			 "columns": [{ "title": "S. No." , "class": "custom"},
				     { "title": "Test Type" , "class": "center"},
			             { "title": "Question", "type" : "string", "class": "center" },
				     { "title": "Option1", "type" : "string", "class": "center" },
                                     { "title": "Option2", "type" : "string", "class": "center" },
                                     { "title": "Option3", "type" : "string", "class": "center" },
                                     { "title": "Option4", "type" : "string", "class": "center" },
                                     { "title": "Answer", "type" : "string", "class": "center" },
                                     { "title": "Active", "type" : "string", "class": "center" }
                                    ]
				 } );
                                 
                   document.getElementById("leftMenuTable1").innerHTML=content;
                                   
                                   
                         
                        }
                        else
                        {
                            popupOpen();
                            document.getElementById("popcontent").innerHTML='<h4>Please Select a course to Manage Examination Questions </h4>';
                            
                            preTest.checked=false;
                            postTest.checked=false;
                        }
                        
                        
                    }
                    
                    