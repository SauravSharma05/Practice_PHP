$(document).on("click","#btn_add",function(){

    data =  $('#user_form').serialize();
    console.log(data)
 
 $.ajax({
         data: data,
         type: "post",
         url: "backend/save.php",
   
     "success":function (result){
         console.log(result)
         console.log(JSON.parse(result))
 
         dataResult = JSON.parse(result);
         console.log(dataResult.status)
 
         if(dataResult.status ==200)
         {
             
             $('#addModal').hide();
             alert("data added..!");
             window.location.reload();
 
         }
     }
 })
 
 
 
 })
 