/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function getRomanNumber(number)
{
    var romanNumber='';
    if(number==='1')  {  romanNumber='I'; }
    if(number==='2')  {  romanNumber='II'; }
    if(number==='3')  {  romanNumber='III'; }
    if(number==='4')  {  romanNumber='IV'; }
    if(number==='5')  {  romanNumber='V'; }
    if(number==='6')  {  romanNumber='VI'; }
    if(number==='7')  {  romanNumber='VII'; }
    if(number==='8')  {  romanNumber='VIII'; }
    if(number==='9')  {  romanNumber='IX'; }
    if(number==='10')  {  romanNumber='X'; }
    return romanNumber;
}
