(function() {
  $(document).ready(function() {
    $('.toggle-switch-input').on('change', function() {
      var isChecked = $(this).is(':checked');
      var selectedData;
      var $switchLabel = $('.toggle-switch-inner');
      console.log('isChecked: ' + isChecked); 
      
      if(isChecked) {
        selectedData = $switchLabel.attr('data-on');
      } else {
        selectedData = $switchLabel.attr('data-off');
      }
      
      console.log('Selected data: ' + selectedData);
      
    });
    
    // Params ($selector, boolean)
    function setSwitchState(el, flag) {
      el.attr('checked', flag);
    }
    
    // Usage
    setSwitchState($('.toggle-switch-input'), true); 

    /*$('#hasil').click(function(){
    	var n = $( "input:checked" ).map(function(){ return this.value })//.get().join(", ");
      //console.log(typeof(a));
    	console.log(n);
/*
      var nStr = JSON.stringify(n);
      $.ajax({
          url: '../nb.php',
          type: 'post',
          data: {n: nStr},
          success: function(response){
              console.log("MASUK");
          }
      });
	   }); */  
  });
})();

$(function(){
      $("#content1").load("gejala.html"); 
      $("#content2").load("penyakit_gejala.html");
      $("#content1").on("click","#hasil",function(){
        $("#content3").load("nb.php");
      });
});