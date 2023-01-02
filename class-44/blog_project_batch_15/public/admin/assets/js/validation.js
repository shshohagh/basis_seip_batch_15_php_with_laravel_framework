 // ! Check Category Name
 function checkCategoryName(){
    var category = $('#category').val();
    var regex=/^[a-z,A-Z,]{2,15}$/;
    if(regex.test(category)){
      $('#errorMessage').html(' ');
      return true;
    }else{
      $('#errorMessage').html('You an use only 2 to 15 letters');
      return false;
    }
    //alert(category);
   }
   // ! Category Name Keyup
   $('#category').keyup(function(){
    var resCatName = checkCategoryName();
   })
    // ! Check Category Code
 function checkCategoryCode(){
    var categoryCode = $('#categoryCode').val();
    var regex=/^[a-z,A-Z,]{2,15}$/;
    if(regex.test(categoryCode)){
      $('#errorMessageCode').html(' ');
      return true;
    }else{
      $('#errorMessageCode').html('You an use only 2 to 15 letters');
      return false;
    }
    //alert(category);
   }
   // ! Category Code Keyup
   $('#categoryCode').keyup(function(){
    var resCatCode = checkCategoryCode();
   });

   if(resCatCode == true && resCatName == true){
    $('#catBtn').prop('disabled', false);
  }else{
    $('#catBtn').prop('disabled', true);
  }
  // ! Category Form
   $('#catForm').submit(function(){
  
    if(checkCategoryName() == true && checkCategoryCode() == true){
      $('#catBtn').prop('disabled', false);
    }else{
      $('#catBtn').prop('disabled', true);
    }
  

   })