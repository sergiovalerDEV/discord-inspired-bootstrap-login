document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault();
  
    let name = document.getElementById('name').value;
    let emailOrPhone = document.getElementById('emailOrPhone').value;
    let password = document.getElementById('password').value;
    let birthday = document.getElementById('birthday').value;
  
    //Obligaciones que se deben cumplir para cada id
    let nameRegex = /^[a-zA-Z\s]{3,}$/; // Letras y espacios, mínimo 3 caracteres
    let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; // Formato email
    let phoneRegex = /^\d{10}$/; // Teléfono de 10 dígitos
    let passwordRegex = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/; // Mínimo 8 caracteres, al menos un número
    let dateRegex = /^\d{4}-\d{2}-\d{2}$/; // Fecha en formato YYYY-MM-DD
    

    //Si no se cumplen, alerta en el navegador, pero no funcionan para archivos .php, preguntarlo en clase 
    if (!nameRegex.test(name)) {
      alert('El nombre debe tener al menos 3 caracteres y contener solo letras.');
      return;
    }
  
    if (!emailRegex.test(emailOrPhone) && !phoneRegex.test(emailOrPhone)) {
      alert('Debe ingresar un correo electrónico válido o un número de teléfono de 10 dígitos.');
      return;
    }
  
    if (!passwordRegex.test(password)) {
      alert('La contraseña debe tener al menos 8 caracteres e incluir al menos un número.');
      return;
    }
  
    if (!dateRegex.test(birthday)) {
      alert('Debe seleccionar una fecha válida.');
      return;
    }
  
    // Si todas las validaciones son correctas
    alert('Formulario enviado correctamente.');
  });
  