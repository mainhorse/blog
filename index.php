<!doctype html>
<html lang="en">
    <head>
        <title>La importancia de la encriptación</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
        <link href="css/style.css" rel="stylesheet" />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"/>
    </head>

    <body>
        <header class="header">
            <nav class="bg-white border-gray-200 dark:bg-gray-900">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img src="img/logoBlog.png" class="h-8" alt="Flowbite Logo" />
                    <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Tu Blog tecnológico</span>
                </a>
                <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                    </svg>
                </button>
                <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                    <a href="#" class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500" aria-current="page">Inicio</a>
                    </li>
                    <li>
                    <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Acerca</a>
                    </li>
                    <li>
                    <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Servicios</a>
                    </li>
                    <li>
                    <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Historias</a>
                    </li>
                    <li>
                    <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Contactanos</a>
                    </li>
                </ul>
                </div>
            </div>
            </nav>
        </header>
        <main class="main">
            <div class="introduction_blog_div">
                <section class="introduction_blog_section">
                    <article>
                        <h3> Claves publicas y privadas </h3>
                        <p style="font-size: 1.2vw ; text-align:justify ">
                        Cuando hablamos de encriptación, pensamos en modificar texto de tal manera que sea ilegible, ya que si este es interceptado en el canal
                        de comunicación será inútil para el atacante que lo intercepta. Esta afirmación, nos dice que el canal de comunicación no es seguro para 
                        transmitir información y nace la necesidad de poder enviar información protegida con el fin que solo el destinatario pueda usar la. Para 
                        esto se usan el método de clave pública, la cual, con un proceso matemático de logaritmos, potencias, números primos, enteros y demás 
                        cifran el mensaje a enviar. Aunque existen varios métodos de encriptación se ve la relación que existe entre la cantidad de bits de la
                        llave publica vs la complejidad del algoritmo, donde deben ser números primos mayores a 2048 bits en algunos casos o el algoritmo debe
                        crecer en su complejidad y con esto asegurar ciertas condiciones, como lo es algoritmo no regresivo. Cuando se tiene la información encriptada
                        con la llave publica, se ve la necesidad de recuperar la información del mensaje y aparece la definición de inverso matemático que sencillamente
                        es encontrar el numero equivalente que al multiplicar nuestro numero nos de 1. Esta es la mejor definición de nuestra clave privada, la cual tiene
                        la relación con nuestra llave publica al entender que esta es su inversa, con la cual se desencriptara la información enviada.
                        </p>
                    </article>
                    <aside class="img_introduction_aside">
                        <img src="img/keys.png" alt="llaves">
                    </aside>
                </section>
                <section class="introduction_blog_section" style="margin-top: 5vh">
                    <aside class="img_introduction_aside">
                        <img src="img/digitalFirm.png" alt="llaves">
                    </aside>
                    <article>
                        <h3> Firma Digital</h3>
                        <p style="font-size: 1.2vw ; text-align:justify ">
                        No solo debemos encriptar la información, ya que en el caso anterior vimos que se puede modificar aplicando métodos matemático y algoritmos que
                        hacen que el texto sea ilegible, debemos buscar la forma de asegurar que el receptor tenga la seguridad de que el emisor correcto le envió la
                        información. Como podríamos validar la información que esperamos sea de la persona de la cual necesitamos la información, o como podemos validar
                        que la información esta intacta y es integra para ser usada. Podríamos imprimir una marca característica que nos ayudara a identificar los 
                        documentos, tanto que sean seguros en su contenido como su remitente. Para este caso se usan las firmas digitales, estas son firmas que usan las 
                        personas para autenticar los documentos que envían. Los usuarios poseen llaves publicas con las cuales crean las firmas digitales, estas no solo 
                        ayudan a identificar el contenido del documento, sino además identifica cual persona de la organización a enviado este documento. Se usa la llave
                        privada para verificar la autenticidad de esta firma. En este caso no se cifra la información, solo se busca la forma de garantizar la
                        autenticidad de estos documentos.
                        </p>
                    </article>
                </section>
                <section class="introduction_blog_section" style="margin-top: 5vh; width : 98%; height :100vh">
                    <article style="width :  90% ;  height : 100%">
                        <h3> Criptosistema de llave pública </h3>
                        <p style="font-size: 1.2vw ; text-align:justify ">
                        Conocido también como sistema asimétrico, es un sistema de encriptación que usa dos llaves una para encriptar (llave publica) y otra para desencriptar
                        (llave privada). Se aplica un sistema de funciones matemáticos los cuales son fáciles de solucionar en la parte del encriptado, pero difícil de solucionar
                        en la parte del desencriptado lo cual hace necesario tener la llave privada para poder obtener el mensaje original. En este sistema cada usuario posee una
                        llave publica y una privada, donde se debe proteger la llave privada y la llave publica puede ser usada por las personas que interactúan en el sistema, 
                        estas dos llaves se crean de manera simultánea. La importancia de este sistema radica en: cifrar la información, asegurar la integridad de los datos
                        transmitidos y garantizar la autenticidad del emisor. Según lo que se desee hacer se pueden tener las siguientes combinaciones:
                        </p></br>
                        <span><strong> •	Mensaje + clave pública = Mensaje cifrado </strong></span></br>
                        <span><strong> •	Mensaje encriptado + clave privada = Mensaje descifrado </strong></span></br>
                        <span><strong>•	Mensaje + clave privada = Mensaje firmado </strong></span></br>
                        <span><strong> •	Mensaje firmado + clave pública = Autenticación</strong></span></br></br>
                        <p>
                        Este sistema debe proporciona las propiedades de autenticidad, integridad y no repudio. Con lo cual nuestro sistema debe garantizar si se conoce el texto cifrado, 
                        que no se pueda obtener el mensaje original ni la obtención de la llave privada de esta. Si se tuviera el texto cifrado y texto en claro, debe ser más difícil 
                        obtener la llave privada que el texto en claro y por último solo debe existir una llave privada capaz de desencriptar un mensaje encriptado con una llave pública. 
                        </p>
                        <h3>Como funciona y cuales son sus algoritmos </h3>
                        <p>
                        Este sistema debe proporciona las propiedades de autenticidad, integridad y no repudio. Con lo cual nuestro sistema debe garantizar si se conoce el texto cifrado,
                        que no se pueda obtener el mensaje original ni la obtención de la llave privada de esta. Si se tuviera el texto cifrado y texto en claro, debe ser más difícil 
                        obtener la llave privada que el texto en claro y por último solo debe existir una llave privada capaz de desencriptar un mensaje encriptado con una llave pública.
                           <h4> 1.	Protocolo de acuerdo de clave de Diffie-Hellman.</h4>
                        </p>
                    </article>
                </section>
                <section class="introduction_blog_section" style="margin-top: 5vh">
                    <aside class="img_introduction_aside">
                        <img src="img/malware.png" alt="llaves">
                    </aside>
                    <article>
                        <h3> Casos Practicos</h3>
                        <p style="font-size: 1.2vw ; text-align:justify ">
                            <h6>Esquema de cifrado hibrido</h6>
                            <p>
                                Cuando nos conectamos a una página segura en la red de internet, estas son las que tienen el indicativo de https://, con el fin de que la comunicación este cifrada 
                                de extremo a extremo asegurando el manejo de la información de una forma segura.
                            </p>
                        </p>
                        <p>
                            <h6> Funcione resumen </h6>
                            <p>
                                En el almacenamiento de información en un dispositivo (computador, usb, correos electrónicos o en un almacenamiento o registro de custodias. Etc). Se pueden almacenar 
                                los registros y comparar los con los archivos en específicos, con el fin de comparar si hubo o no un cambio en la estructura de estos. Esto con el fin de saber si son o
                                no seguros. 
                            </p>
                            <h6>Malware</h6>
                            <p>
                                Cuando tenemos un antivirus, este intenta detectar la presencia de software dañino en un dispositivo calculando el resumen de los ficheros que son vulnerables en el dispositivo. 
                                Cada uno de estos es comparado con la información que se tiene en la base de datos y que es actualizada por la empresa desarrolladora. Si se encuentran relacionadas, se da una 
                                alarma de archivo dañino y el programa informa al usuario. Se recomienda tener un antivirus actualizado en cada momento.
                            </p>
                        </p>
                    </article>
                </section>
            </div>
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    </body>
</html>
