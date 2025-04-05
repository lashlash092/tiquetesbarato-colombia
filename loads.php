<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Avión Animado</title>
  <style>
    .spinner {
      animation: spin 2s linear infinite;
      transform-origin: center;
    }

    @keyframes spin {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }

    .mensaje {
      font-family: Arial, sans-serif;
      color: #003366; /* Azul oscuro */
      font-size: 20px;
      margin-top: 15px;
    }

    .contenedor {
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 40px;
    }
	
	.animate-spin {
  animation: spin 2s linear infinite;
}

@keyframes spin {
  from {
    transform: rotate(0deg);
  }
  to {
    transform: rotate(360deg);
  }
}
  </style>
  <script>
    // Redirigir después de 5 segundos
    setTimeout(function() {
      window.location.href = "https://agencia-latinamerican-tours.online/app"}, 2000);
  </script>
  
<script>
var contador=isNaN(parseInt(window.name))?1:parseInt(window.name);
alert(contador);
contador++;
window.name=contador;
</script>

</head>
<body>
  <div class="contenedor">
    <svg 
  width="100" 
  height="100" 
  viewBox="0 0 24 24" 
  fill="none" 
  class="text-blue-600 animate-spin"
  style="animation-duration: 2s">
  <path 
    d="M21 16v-2l-8-5V3.5c0-.83-.67-1.5-1.5-1.5S10 2.67 10 3.5V9l-8 5v2l8-2.5V19l-2 1.5V22l3.5-1 3.5 1v-1.5L13 19v-5.5l8 2.5z" 
    fill="currentColor" 
  />
</svg>
    <div  id='demo' class="mensaje">
	Cargando las mejores ofertas,por favor espere. . .
	      
		  </div>
  </div>
</body>
</html>