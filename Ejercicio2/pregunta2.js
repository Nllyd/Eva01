function pregunta2() {
    const edadInput = document.getElementById("edad");
    const edad = edadInput.value;
    if (edad < 18) {
      alert("Debe ser mayor de 18 años para continuar");
      return false;
    }
    return true;
  }