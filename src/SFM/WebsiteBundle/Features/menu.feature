# language: es
Característica: Knp menu
  Para disponer de unos elegantes menús en nuestra aplicación
  Como desarrollador en Symfony2  
  Necesito ser capaz de utilizar KnpMenuBundle 

  Escenario: Prueba para saber qué es lo que ve el crawler
    Dado Yo estoy en "/"
    Entonces Yo veo "/"
    
  Escenario: Existe un enlace "Inicio" en la página principal 
    Dado Yo estoy en "/"
    Entonces Yo debo ver "Inicio"   

  Escenario: Puedo navegar por todos los enlaces
    Dado Yo estoy en "/"
    Cuando Yo sigo "Blog"
    Y Yo sigo "Proyectos"
    Y Yo sigo "Personas"
    Y Yo sigo "Inicio"
    Entonces Yo debo ver "¿Quiénes somos?"
