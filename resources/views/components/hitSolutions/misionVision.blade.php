@extends('welcome')

@section('barNav')
<link href="{{ asset('css/inicio/textos.css') }}" rel="stylesheet" />
<link href="{{ asset('css/hitSolutions/misionVison.css') }}" rel="stylesheet" />
    <div class="divPrincipal">
        <h1 class="titulo">HIT Solutions<br></h1>
        <h2>¿Que es lo que buscamos?</h2>
        <div>
            <p class="bienvenidaAlVisonMision">
                Desde nuestro inicio, nos hemos enfocado en un objetivo fundamental: cuidar la salud de las personas con un enfoque fresco, dinámico y comprometido. Como empresa joven, entendemos los desafíos actuales y sabemos que el acceso a soluciones de salud confiables es esencial. Por ello, trabajamos con responsabilidad y empatía, poniendo siempre a las personas en el centro de todo lo que hacemos. Buscamos ser más que un proveedor de servicios, queremos ser un apoyo real en cada etapa del camino, brindando información, herramientas y asistencia cuando más se necesita.
            </p>
        </div>
        <div class="divPrincipalMisionVision">
            <div class="misionVision-div">
                <img src="./assets/hitSolutions/misionVision/mision.webp" alt="Logo del producto" class="imagenMisionVision_misionVision">
                <div class="div-tetxoMisionVisio">
                    <h3 class="tituloMisionVision">Mision</h3>
                    <p class="tetoMisionVision">
                        Somos una empresa joven comprometida con la salud y el bienestar de las personas. Nuestra misión es proporcionar soluciones innovadoras y accesibles que mejoren la calidad de vida, ofreciendo un servicio cercano, confiable y humano. Buscamos ser un apoyo en momentos clave, brindando atención y herramientas que permitan a cada persona cuidar de su salud de manera efectiva y segura.
                    </p>
                </div>
            </div>
            <div class="misionVision-div">
                <div class="div-tetxoMisionVisio">
                    <h3 class="tituloMisionVision">Mision</h3>
                    <p class="tetoMisionVision">
                        Aspiramos a ser un referente en el sector de la salud, reconocidos por nuestro compromiso, innovación y calidad en el servicio. Nos proyectamos como una empresa en constante crecimiento, adaptándonos a las necesidades cambiantes de la sociedad y utilizando la tecnología y el conocimiento para mejorar la vida de las personas. Queremos ser el aliado de confianza en el bienestar de nuestra comunidad, generando un impacto positivo y duradero.
                </div>
                <img src="./assets/hitSolutions/misionVision/vision.jpg" alt="Logo del producto" class="imagenMisionVision_misionVision">
            </div>
        </div>
    </div>
@endsection