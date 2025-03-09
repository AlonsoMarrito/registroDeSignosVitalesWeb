@extends('welcome')

@section('barNav')
<link href="{{ asset('css/inicio/textos.css') }}" rel="stylesheet" />
<link href="{{ asset('css/hitSolutions/quienesSomos.css') }}" rel="stylesheet" />
    <div class="divPrincipal">
        <h1 class="titulo">HIT Solutions<br></h1>
        <div class="divSuperior">
            <img src="./assets/hitSolutions/quienesSomos/altoRendimiento.webp" alt="Logo del producto" class="imagenQuienesSomos_Equipo">
            <p class="textoQuienesSomos_Equipo">
                Somos una empresa joven y apasionada, nacida con el propósito de contribuir al bienestar de las personas. Creemos que la salud es el pilar fundamental de una vida plena, por lo que trabajamos constantemente en desarrollar soluciones innovadoras y accesibles para mejorar la calidad de vida de nuestra comunidad. Nos motiva la confianza de quienes buscan apoyo en momentos clave y nos esforzamos por ofrecer servicios y productos que marquen una diferencia real. Nuestro compromiso es claro: ser un aliado en el cuidado de la salud, brindando atención responsable, cercana y efectiva.
            </p>
        </div>
        <div class="divMedio">
            <div class="divParticipante">
                <img src="./assets/hitSolutions/quienesSomos/alonso.jpeg" alt="Logo del producto" class="imagenQuienesSomos_Participantes">
                <p class="textoQuienesSomos_Participante">
                    Director corporativo <br> Programador movil
                </p>
            </div>
            <div class="divParticipante">
                <img src="./assets/hitSolutions/quienesSomos/jesus.jpeg" alt="Logo del producto" class="imagenQuienesSomos_Participantes">
                <p class="textoQuienesSomos_Participante">
                    Directora de diseño <br> Programador movil
                </p>
            </div>
            <div class="divParticipante">
                <img src="./assets/hitSolutions/quienesSomos/jesus.jpeg" alt="Logo del producto" class="imagenQuienesSomos_Participantes">
                <p class="textoQuienesSomos_Participante">
                    Director administrativo <br> Programador internet de las cosa
                </p>
            </div>
        </div>
        <div class="divSuperior">
            <p class="textoQuienesSomos_Equipo2">
                Somos una empresa joven con un fuerte compromiso con la salud y el bienestar de la gente. Creemos que cada persona merece acceso a soluciones que mejoren su calidad de vida, por eso trabajamos con dedicación para ofrecer alternativas innovadoras, seguras y efectivas. Nuestro enfoque es cercano y humano, porque entendemos que la salud va más allá de tratamientos y productos; es acompañamiento, confianza y compromiso. Día a día buscamos crecer y evolucionar, siempre con la meta de convertirnos en un aliado confiable en el cuidado de la salud de nuestra comunidad.
            </p>
            <img src="./assets/hitSolutions/quienesSomos/altoRendimiento.webp" alt="Logo del producto" class="imagenQuienesSomos_Equipo2">
        </div>
    </div>
@endsection