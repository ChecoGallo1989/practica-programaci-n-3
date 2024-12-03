


document.addEventListener('DOMContentLoaded', function() {
  const form = document.getElementById('registrationForm');
  form.addEventListener('submit', function(event) {
      const contraseña = document.getElementById('contraseña').value;
      const confirmarContraseña = document.getElementById('confirmarContraseña').value;

      if (contraseña !== confirmarContraseña) {
          event.preventDefault(); // Prevenir el envío del formulario
          alert('Las contraseñas no coinciden. Por favor, inténtelo de nuevo.');
      } else {
          console.log('Formulario enviado con éxito');
      }
  });
});





    /// let form = document.getElementById('registrationForm');
    
    ///    form.action = `https://formsubmit.co/${encodeURIComponent(email)}`; 
            
    ///    form.submit(); 

        

    
    


/*document.getElementById('registrationForm').addEventListener('submit', function(event) { event.preventDefault(); 
    
let email = document.getElementById('email').value; 

this.action = `https://formsubmit.co/${encodeURIComponent(email)}`; 

this.submit(); 

});*/

