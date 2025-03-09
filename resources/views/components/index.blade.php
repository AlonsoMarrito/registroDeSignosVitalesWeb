@extends('welcome')

@section('barNav')
<link href="{{ asset('css/inicio/textos.css') }}" rel="stylesheet" />
<link href="{{ asset('css/inicio/subMenu.css') }}" rel="stylesheet" />
    <div class="divPrincipal">
        <i class="tituloDeLaEmpresa">H.I.T.</i>
        <i class="sub-tituloDeLaEmpresa">Solutions</i>
    </div>
    <div class="subBarra-principal">
        <h1 class="textoSubMenus">Healt Information Technology Solutions</h1>
    </div>
    <div class="primeraSeccion">
        <div class="zonaImagenTexto">
            <img src="./assets/inicio/medicoApoyo.jpg" alt="Logo del producto" class="imagenTextoInformativo">
        </div>
        <div>
            <div class="div1-textInformativo" onclick="acercaDe(1)">
                <p class="text-Informativo">
                    Cuidamos de Ti <br>
                </p>
            </div>
            <div class="div1-textInformativo" onclick="acercaDe(2)">
                <p class="text-Informativo">
                    Tu Salud, Nuestra Prioridad
                </p>
            </div>
        </div>
    </div>
    <div class="primeraSeccion">
        <div>
            <div class="div1-textInformativo" onclick="acercaDe(3)">
                <p class="text-Informativo">
                    Un Aliado en Tu Bienestar
                </p>
            </div>
            <div class="div1-textInformativo" onclick="acercaDe(4)">
                <p class="text-Informativo">
                    Siempre Contigo en la Salud
                </p>
            </div>
        </div>
        <div class="zonaImagenTexto">
            <img src="./assets/inicio/chicaRun.jpg" alt="Logo del producto" class="imagenTextoInformativo">
        </div>
    </div>
    <div class="">
        <div class="divFinal">
            <div class="div3-textInformativo" onclick="acercaDe(5)">
                <p class="text-Informativo">
                    Tu Confianza, Nuestra Motivación
                </p>
            </div>
            <div class="div3-textInformativo" onclick="acercaDe(6)">
                <p class="text-Informativo">
                    Compromiso y Cuidado para Todos
                </p>
            </div>
        </div>
        <div class="zonaImagenTexto3">
            <img src="./assets/inicio/movilInovacion.jpg" alt="Logo del producto" class="imagenTextoInformativo3">
        </div>
    </div>
    <div class="subBarra-principal">
        <h1 class="textoSubMenus">Contactanos: solutionhit128@gmail.com
        </h1>
    </div>
    <script>
        //Somos una empresa comprometida con la salud y el bienestar de las personas, ofreciendo soluciones innovadoras y accesibles para mejorar su calidad de vida.
    
        function acercaDe(parametro){
            let texto = "";
            if (parametro === 1){
                texto = "Equipo comprometido con la salud y el bienestar de las personas, ofreciendo soluciones innovadoras y accesibles para mejorar su calidad de vida.";
            } else if( parametro=== 2){
                texto = "Pasión para garantizar que cada persona reciba el apoyo y la atención que necesita, promoviendo una vida más sana y equilibrada.";
            } else if( parametro=== 3){
                texto = "Ser más que una empresa: un verdadero respaldo en temas de salud, brindando orientación, productos y servicios que marcan la diferencia.";
            } else if( parametro=== 4){
                texto = "La salud es lo más importante, por eso ponemos nuestra experiencia y compromiso al servicio de quienes necesitan apoyo en momentos difíciles.";
            } else if( parametro=== 5){
                texto = "Ser un apoyo sólido en situaciones de salud, ofreciendo soluciones confiables y oportunas para mejorar la vida de las personas.";
            } else if( parametro=== 6){
                texto = "Proporcionar ayuda en temas de salud, con un enfoque humano y profesional que garantiza el bienestar de quienes confían en nosotros.";
            }
            Swal.fire({
            title: texto,
            showClass: {
                popup: `
                animate__animated
                animate__fadeInUp
                animate__faster
                `
            },
            hideClass: {
                popup: `
                animate__animated
                animate__fadeOutDown
                animate__faster
                `
            }
            });
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection