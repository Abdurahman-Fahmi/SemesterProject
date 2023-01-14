var pickedDate="";

$(function () {
  $("#datepicker").datepicker({
    dateFormat: "  dd - mm - yy",
    minDate: new Date()
  });
  $("#setDate").click(function () {
    //alerting the value inside the textbox
    date = $("#datepicker").datepicker("getDate");
    pickedDate = $.datepicker.formatDate("dd-mm-yy", date);
    
    if(pickedDate != "")
    {
    document.getElementById("submit").style.display="block";
    alert(pickedDate)
    }
  });
  });

  submitCheck

function submitCheck() 
{
  let output = document.getElementById("output")
    const dateInput = document.getElementById('datepicker');

      if ( ((document.getElementById('rad-car').checked)||
            ((document.getElementById('rad-bike').checked))||
            ((document.getElementById('rad-bus').checked)) )  
            &&
            ((document.getElementById('rad1-driver').checked)||
            ((document.getElementById('rad2-driver').checked)) ) 

            && 
            (document.getElementById('check18').checked)
            && 
            !(!dateInput.value)
          ) 
      {
        const Vechiles = document.querySelectorAll('input[name="radio-vehicle"]');
        const drivers = document.querySelectorAll('input[name="radio-driver"]');

        let selectedVechle;
        for (const Vechile of Vechiles) {
          if (Vechile.checked) {
            selectedVechle = Vechile.value;
            break;
          }
        }

        let selectedDriver;
        for (const driver of drivers) {
          if (driver.checked) {
            selectedDriver = driver.value;
            break;
          }
        }

        if((selectedVechle == "Bus") && (selectedDriver == "Without Driver"))
        {
          output.innerText = `You cannot select ${selectedVechle} ${selectedDriver} ` 
          document.getElementById("Search").style.display="none"; 
        }
         else if((selectedVechle == "Bike") && (selectedDriver == "With Driver")){
          output.innerText = `You cannot select ${selectedVechle} ${selectedDriver} ` 
          document.getElementById("Search").style.display="none"; 
        }
        else{
        output.innerText = `You selected ${selectedVechle} ${selectedDriver} \n On ${pickedDate} `;
        document.getElementById("Search").style.display="block";


      }

      
      }
      else{
        alert("Fill all the information! ");

      }
}

function searchCheck() {
        window.location= "owner/owner.html";

}

