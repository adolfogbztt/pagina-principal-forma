<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $faq = [
        [
            'pregunta' => '¿Ofrecen servicios de producción audiovisual para eventos corporativos?',
            'respuesta' => 'Sí, en Forma Producciones ofrecemos servicios completos de producción audiovisual para eventos corporativos. Desde la planificación hasta la ejecución, nos encargamos de capturar y transmitir la esencia de su evento de manera profesional y efectiva.',
        ],
        [
            'pregunta' => '¿Proporcionan servicios de catering específicamente diseñados para eventos corporativos?',
            'respuesta' => 'Sí, ofrecemos servicios de catering corporativo adaptados a las necesidades y preferencias de su evento. Nuestro equipo se encarga de proporcionar opciones gastronómicas de alta calidad que deleitarán a sus invitados.',
        ],
        [
            'pregunta' => '¿Ofrecen alquiler de equipos como cafeteras automáticas para eventos corporativos?',
            'respuesta' => 'Sí, contamos con servicio de alquiler de equipos adicionales como cafeteras automáticas para complementar su evento corporativo. Nos aseguramos de proporcionar equipos de calidad que satisfagan las necesidades de su evento.',
        ],
        [
            'pregunta' => '¿En cuánto tiempo pueden proporcionar una cotización para un evento corporativo?',
            'respuesta' => 'Nos comprometemos a proporcionarle una cotización detallada dentro de un plazo de [especificar el plazo, por ejemplo, 48 horas] desde que recibimos todos los detalles pertinentes sobre su evento corporativo. Nuestro objetivo es brindarle una estimación precisa y oportuna para que pueda tomar decisiones informadas sobre su evento.',
        ],
        [
            'pregunta' => '¿Qué servicios incluye su servicio de Streaming para eventos corporativos?',
            'respuesta' => 'Nuestro servicio de Streaming para eventos corporativos incluye la transmisión en vivo de su evento a través de plataformas digitales seleccionadas, asegurando que su audiencia pueda participar virtualmente en tiempo real. Nos encargamos de todos los aspectos técnicos para garantizar una experiencia de visualización fluida y de alta calidad.',
        ],
        [
            'pregunta' => '¿Ofrecen servicios de producción audiovisual en formato 360 para eventos corporativos?',
            'respuesta' => 'Sí, en Forma Producciones ofrecemos servicios de producción audiovisual en formato 360 para eventos corporativos. Esta tecnología permite una experiencia inmersiva única, donde los espectadores pueden explorar el entorno del evento desde todos los ángulos. Desde la grabación hasta la edición, nos aseguramos de capturar cada momento de su evento en 360 grados para ofrecer una experiencia visualmente impresionante.',
        ]
    ];

    return view('corporativo', compact('faq'));
});

// Route::get('/citas', function () {
//     return view('citas');
// });

Route::get('/colegios', function () {

    $faq = [
        [
            'pregunta' => '¿Ofrecen servicios de producción de videos para instituciones educativas que desean destacar en su sitio web?',
            'respuesta' => 'Sí, en Forma Producciones ofrecemos servicios de producción de videos adaptados a las necesidades de las instituciones educativas. Desde videos institucionales que resaltan la identidad y valores de la institución hasta videos promocionales para eventos especiales, estamos preparados para ayudar a su institución a destacarse en la web.',
        ],
        [
            'pregunta' => '¿Realizan la elaboración de anuarios para instituciones educativas?',
            'respuesta' => 'Sí, ofrecemos servicios de diseño y elaboración de anuarios personalizados para instituciones educativas. Nuestros anuarios son una manera memorable de capturar los momentos especiales de cada año escolar y preservarlos para siempre.',
        ],
        [
            'pregunta' => '¿En qué consiste el anuario de una promoción de quinto de secundaria?',
            'respuesta' => 'El anuario de una promoción de quinto de secundaria es un compendio que recopila fotografías, semblanzas, mensajes y recuerdos de los estudiantes que están por graduarse. Es una forma de conmemorar su paso por la escuela secundaria y preservar esos recuerdos para toda la vida.',
        ],
        [
            'pregunta' => '¿Cuál es la diferencia entre un anuario y un photobook?',
            'respuesta' => 'El anuario es un compendio más formal y completo que suele incluir fotografías grupales, semblanzas, mensajes de despedida y recuerdos de actividades escolares. Por otro lado, el photobook es más personalizado y se enfoca en las fotos individuales de los estudiantes, permitiendo una mayor personalización y creatividad en el diseño.',
        ],
        [
            'pregunta' => '¿Ofrecen servicios de streaming para cubrir actividades relacionadas con la promoción?',
            'respuesta' => 'Sí, brindamos servicios de streaming para cubrir una amplia gama de actividades relacionadas con la promoción, como ceremonias de graduación, eventos deportivos y culturales. Nuestra tecnología de streaming garantiza una transmisión en vivo fluida y de alta calidad para que todos puedan disfrutar de los eventos en tiempo real.',
        ],
        [
            'pregunta' => '¿Toman fotos artísticas para el photobook o anuario?',
            'respuesta' => 'Sí, en Forma Producciones ofrecemos sesiones de fotografía artística tanto en nuestros estudios como en exteriores para capturar momentos especiales que se incluirán en el photobook o anuario. Nuestro equipo de fotógrafos trabaja para crear imágenes que destaquen la esencia y la personalidad de los estudiantes y agreguen un toque distintivo a su proyecto.',
        ]
    ];

    return view('colegio', compact('faq'));
});

Route::get('/eventos', function () {

    $faq = [];

    return view('evento', compact('faq'));
});

Route::get('/contacto', function () {
    return view('pages.contacto');
});

Route::get('/nosotros', function () {
    return view('pages.nosotros');
});

Route::get('/cookies', function () {
    return view('pages.cookies');
});

Route::get('/clientes', function () {
    return view('pages.clientes');
});

Route::get('/clientes/colegios', function () {
    return view('pages.clientes.colegios');
});

Route::get('/clientes/empresas', function () {
    return view('pages.clientes.empresas');
});

Route::get('/clientes/universidades', function () {
    return view('pages.clientes.universidades');
});

// blog-drone paginas listas
Route::get('/blog-drone/cartografia', function () {

    $faq = [
        [
            'pregunta' => '¿Ofrecen servicios de cartografía para gobiernos regionales?',
            'respuesta' => 'Sí, en nuestra empresa ofrecemos servicios de cartografía especializados para gobiernos regionales. Nuestro equipo cuenta con experiencia en la creación de mapas personalizados que cumplen con los requisitos y estándares de las entidades gubernamentales.',
        ],
        [
            'pregunta' => '¿Pueden crear mapas topográficos detallados para empresas del sector agrícola?',
            'respuesta' => 'Sí, tenemos la capacidad de generar mapas topográficos detallados que son útiles para empresas del sector agrícola. Estos mapas proporcionan información clave sobre la topografía del terreno, la elevación y otros datos relevantes para la planificación y gestión de actividades agrícolas.',
        ],
        [
            'pregunta' => '¿Cuál es el tiempo estimado de entrega para la creación de mapas personalizados?',
            'respuesta' => 'El tiempo de entrega para la creación de mapas personalizados puede variar según la complejidad del proyecto y los requisitos específicos del cliente. Por lo general, proporcionamos un cronograma detallado al inicio del proyecto para garantizar una entrega oportuna y satisfactoria.',
        ],
        [
            'pregunta' => '¿Ofrecen servicios de cartografía digital?',
            'respuesta' => 'Sí, ofrecemos servicios de cartografía digital que incluyen la creación de mapas en formato digital, la georreferenciación de datos y la integración de información geoespacial en sistemas de información geográfica (SIG). Nuestro enfoque en la tecnología digital nos permite ofrecer soluciones innovadoras y eficientes a nuestros clientes.',
        ],
        [
            'pregunta' => '¿Qué tipo de datos se pueden incluir en los mapas cartográficos?',
            'respuesta' => 'Los mapas cartográficos pueden incluir una amplia variedad de datos, como información geográfica, límites administrativos, relieve del terreno, cuerpos de agua, infraestructura vial, cobertura vegetal, entre otros. Nos adaptamos a las necesidades específicas de cada cliente para garantizar que los mapas contengan la información relevante para su proyecto o aplicación.',
        ]
    ];

    return view('pages.blog-drone.cartografia', compact('faq'));
});

Route::get('/blog-drone/termografia', function () {

    $faq = [
        [
            'pregunta' => '¿Cómo se lleva a cabo una inspección termográfica con drones y qué precisión se puede esperar?',
            'respuesta' => 'Durante una inspección termográfica con drones, la aeronave equipada con una cámara térmica vuela sobre el área de interés y captura imágenes térmicas. Estas imágenes se procesan para identificar anomalías térmicas que pueden indicar problemas. La precisión depende de varios factores, incluida la calidad del equipo y la experiencia del operador, pero puede detectar problemas con alta precisión.',
        ]
    ];

    return view('pages.blog-drone.termografia', compact('faq'));
});

Route::get('/blog-drone/fotogrametria', function () {

    $faq = [
        [
            'pregunta' => '¿Qué ventajas ofrece la fotogrametría con drones en comparación con los métodos tradicionales de levantamiento topográfico?',
            'respuesta' => 'La fotogrametría con drones ofrece ventajas significativas, como la rapidez en la recopilación de datos, la capacidad de cubrir grandes áreas de manera eficiente y la generación de modelos 3D y mapas de alta resolución con precisión milimétrica.',
        ],
        [
            'pregunta' => '¿Cómo puede la fotogrametría con drones mejorar los procesos de diseño y planificación en la industria de la construcción?',
            'respuesta' => 'La fotogrametría con drones permite obtener información detallada y actualizada sobre el terreno, lo que facilita la identificación de posibles desafíos y la optimización de los diseños. Además, proporciona datos precisos para la planificación de la construcción y la gestión de proyectos.',
        ],
        [
            'pregunta' => '¿Qué tipo de precisión se puede lograr con la fotogrametría con drones en la generación de modelos 3D y mapas de alta resolución?',
            'respuesta' => 'Con la fotogrametría con drones, podemos alcanzar una precisión submétrica en la generación de modelos 3D y mapas, lo que garantiza la exactitud necesaria para una amplia gama de aplicaciones, desde la ingeniería civil hasta la gestión de recursos naturales.',
        ]
    ];

    return view('pages.blog-drone.fotogrametria', compact('faq'));
});

Route::get('/blog-drone/corporativo', function () {

    $faq = [
        [
            'pregunta' => '¿Qué beneficios ofrece la producción de videos corporativos para mi empresa?',
            'respuesta' => 'Los videos corporativos son una poderosa herramienta de comunicación que pueden aumentar la visibilidad de tu marca, mejorar el compromiso de los empleados, atraer nuevos clientes y transmitir mensajes clave de manera efectiva.',
        ],
        [
            'pregunta' => '¿Qué tipo de videos corporativos pueden producir?',
            'respuesta' => 'Podemos producir una amplia variedad de videos corporativos, incluyendo videos institucionales, testimoniales de clientes, videos de productos o servicios, videos de entrenamiento para empleados, videos promocionales y más.',
        ],
        [
            'pregunta' => '¿Cuál es el proceso de producción de un video corporativo?',
            'respuesta' => 'Nuestro proceso de producción incluye la planificación y conceptualización del video, la filmación con equipos de alta calidad, la edición profesional, la incorporación de música y gráficos, y la entrega del video final en el formato deseado.',
        ],
        [
            'pregunta' => '¿Qué puedo esperar en cuanto a plazos de entrega y costos?',
            'respuesta' => 'Los plazos de entrega y los costos pueden variar según la complejidad del proyecto y tus requisitos específicos. Nos comprometemos a proporcionarte un presupuesto detallado y un calendario de producción claro antes de comenzar cualquier proyecto.',
        ],
        [
            'pregunta' => '¿Tienen experiencia trabajando con empresas de mi industria?',
            'respuesta' => 'Sí, contamos con experiencia trabajando con empresas de una amplia gama de industrias, desde tecnología hasta salud, manufactura, finanzas, y más. Nos adaptamos a las necesidades y objetivos únicos de cada cliente para producir videos corporativos efectivos y de alta calidad.',
        ]
    ];

    return view('pages.blog-drone.corporativo', compact('faq'));
});

// Producción Gráfica
Route::get('/pro-grafica/c_fotocheck', function () {

    $faq = [
        [
            'pregunta' => '¿Qué beneficios ofrece la fotografía corporativa para mi empresa?',
            'respuesta' => 'La fotografía corporativa ayuda a transmitir la identidad y profesionalismo de tu empresa, capturando la esencia de tu marca y creando una impresión positiva en clientes y empleados.',
        ],
        [
            'pregunta' => '¿Qué tipo de fotografías corporativas pueden realizar?',
            'respuesta' => 'Podemos realizar una variedad de fotografías corporativas, incluyendo retratos de equipo, imágenes de productos, fotografías de eventos corporativos, fotografías de instalaciones y locaciones, entre otras.',
        ],
        [
            'pregunta' => '¿Cuál es el proceso de sesión fotográfica corporativa?',
            'respuesta' => 'El proceso generalmente incluye la planificación de la sesión, la preparación del equipo y locaciones, la sesión de fotografía en sí, y finalmente la selección y edición de las mejores imágenes para su entrega.',
        ],
        [
            'pregunta' => '¿Cuánto tiempo tomará obtener las fotografías finales?',
            'respuesta' => 'El tiempo de entrega puede variar según el alcance del proyecto y la cantidad de imágenes requeridas, pero nos comprometemos a proporcionar un calendario claro y cumplir con los plazos acordados.',
        ],
        [
            'pregunta' => '¿Tienen experiencia trabajando con empresas de mi industria?',
            'respuesta' => 'Sí, contamos con experiencia trabajando con empresas de diversas industrias y nos adaptamos a las necesidades y estilo de cada cliente para capturar imágenes que reflejen su identidad y mensaje corporativo.',
        ],
        [
            'pregunta' => '¿Ofrecen servicios adicionales como retoque digital o producción de álbumes fotográficos?',
            'respuesta' => 'Sí, ofrecemos servicios adicionales como retoque digital para mejorar la calidad de las imágenes y la producción de álbumes fotográficos personalizados según las necesidades de nuestros clientes.',
        ]
    ];

    return view('pages.pro-grafica.c_fotocheck', compact('faq'));
});

Route::get('/pro-grafica/titulos-diplomas', function () {

    $faq = [
        [
            'pregunta' => '¿Por qué es importante la fotografía de productos para mi negocio?',
            'respuesta' => 'La fotografía de productos es crucial para mostrar tus productos de manera atractiva y persuasiva, lo que puede aumentar las ventas y mejorar la percepción de tu marca.',
        ],
        [
            'pregunta' => '¿Qué tipo de productos pueden fotografiar?',
            'respuesta' => 'Podemos fotografiar una amplia gama de productos, desde artículos pequeños como joyas y accesorios hasta productos más grandes como muebles y electrodomésticos.',
        ],
        [
            'pregunta' => '¿Cuál es el proceso de fotografía de productos?',
            'respuesta' => 'El proceso generalmente implica la planificación de la sesión, la preparación del equipo y el set, la sesión de fotografía en sí, la edición de imágenes y la entrega de las fotografías finales.',
        ],
        [
            'pregunta' => '¿Cómo puedo preparar mis productos para la sesión fotográfica?',
            'respuesta' => 'Recomendamos limpiar y preparar cuidadosamente tus productos antes de la sesión, asegurándote de que estén libres de polvo y en óptimas condiciones para que luzcan lo mejor posible en las fotografías.',
        ],
        [
            'pregunta' => '¿Cuánto tiempo tomará obtener las fotografías finales de mis productos?',
            'respuesta' => 'El tiempo de entrega puede variar según la cantidad de productos y la complejidad de la sesión, pero nos comprometemos a proporcionar un calendario claro y cumplir con los plazos acordados.',
        ],
        [
            'pregunta' => '¿Ofrecen servicios de retoque digital para mejorar las imágenes de mis productos?',
            'respuesta' => 'Sí, ofrecemos servicios de retoque digital para mejorar la calidad de las imágenes, ajustar el color y el brillo, eliminar imperfecciones y crear fondos limpios y profesionales.',
        ],
        [
            'pregunta' => '¿Pueden fotografiar productos en locaciones específicas o necesitan un estudio fotográfico?',
            'respuesta' => 'Podemos fotografiar productos tanto en un estudio fotográfico como en locaciones específicas, dependiendo de las necesidades y preferencias de nuestros clientes.',
        ]
    ];

    return view('pages.pro-grafica.titulos-diplomas', compact('faq'));
});

Route::get('/pro-grafica/memorias-corp', function () {

    $faq = [];

    return view('pages.pro-grafica.memorias-corp', compact('faq'));
});

// pro-audiovisual
Route::get('/pro-audiovisual/video-corporativo', function () {

    $faq = [
        [
            'pregunta' => '¿Cómo garantizan que el video capturará la esencia y el ambiente de nuestra conferencia de manera auténtica y profesional?',
            'respuesta' => 'Nos aseguramos de trabajar con un equipo experimentado y equipado con tecnología de vanguardia para capturar cada momento importante con calidad y precisión. Nuestra atención meticulosa a los detalles y nuestra habilidad para adaptarnos al entorno de la conferencia garantizan resultados auténticos y profesionales.',
        ],
        [
            'pregunta' => '¿Qué medidas toman para garantizar la discreción y la mínima interrupción durante la grabación de nuestra conferencia?',
            'respuesta' => 'Nuestro equipo de profesionales comprende la importancia de mantener un perfil discreto y minimizar cualquier interrupción durante la conferencia. Utilizamos equipos de grabación discretos y nos coordinamos cuidadosamente con el personal del evento para asegurarnos de que nuestro trabajo sea lo menos intrusivo posible.',
        ],
        [
            'pregunta' => '¿Ofrecen opciones de edición personalizadas para adaptarse a nuestras necesidades específicas de contenido y estilo?',
            'respuesta' => 'Sí, nos especializamos en ofrecer servicios de edición personalizados que se ajusten a las necesidades y preferencias únicas de cada cliente. Desde el estilo de edición hasta la selección de música y gráficos, trabajamos estrechamente con usted para crear un video que refleje fielmente su visión y mensaje.',
        ],
        [
            'pregunta' => '¿Qué medidas toman para garantizar la seguridad y confidencialidad de nuestros datos y contenido durante todo el proceso de producción?',
            'respuesta' => 'Implementamos estrictas medidas de seguridad y confidencialidad para proteger sus datos y contenido en cada etapa del proceso de producción. Desde la firma de acuerdos de confidencialidad hasta el uso de tecnologías seguras de almacenamiento y transmisión de datos, nos comprometemos a proteger su información con el más alto nivel de seguridad.',
        ],
        [
            'pregunta' => '¿Ofrecen opciones de distribución y promoción del video después de la conferencia?',
            'respuesta' => 'Sí, ofrecemos servicios de distribución y promoción del video para ayudarlo a maximizar el alcance y el impacto de su contenido después de la conferencia. Desde la publicación en plataformas en línea hasta la creación de campañas de marketing digital, estamos aquí para ayudarlo a compartir su mensaje con su audiencia objetivo.',
        ]
    ];

    return view('pages.pro-audiovisual.video-corporativo', compact('faq'));
});

// video-corporativo blog

Route::get('/blog-corporativo/conferencias', function () {

    $faq = [];

    return view('pages.blog-corporativo.conferencias', compact('faq'));
});

Route::get('/blog-corporativo/documentales', function () {

    $faq = [];

    return view('pages.blog-corporativo.documentales', compact('faq'));
});

Route::get('/blog-corporativo/grabacion-eventos', function () {

    $faq = [];

    return view('pages.blog-corporativo.grabacion-eventos', compact('faq'));
});

Route::get('/blog-corporativo/spot-publi', function () {

    $faq = [];

    return view('pages.blog-corporativo.spot-publi', compact('faq'));
});

Route::get('/blog-corporativo/video-induccion', function () {

    $faq = [];

    return view('pages.blog-corporativo.video-induccion', compact('faq'));
});

Route::get('/blog-corporativo/video-inst', function () {

    $faq = [];

    return view('pages.blog-corporativo.video-inst', compact('faq'));
});

Route::get('/pro-audiovisual/streaming', function () {

    $faq = [
        [
            'pregunta' => '¿Cómo garantizan que el video capturará la esencia y el ambiente de nuestra conferencia de manera auténtica y profesional?',
            'respuesta' => 'Nos aseguramos de trabajar con un equipo experimentado y equipado con tecnología de vanguardia para capturar cada momento importante con calidad y precisión. Nuestra atención meticulosa a los detalles y nuestra habilidad para adaptarnos al entorno de la conferencia garantizan resultados auténticos y profesionales.',
        ],
        [
            'pregunta' => '¿Qué medidas toman para garantizar la discreción y la mínima interrupción durante la grabación de nuestra conferencia?',
            'respuesta' => 'Nuestro equipo de profesionales comprende la importancia de mantener un perfil discreto y minimizar cualquier interrupción durante la conferencia. Utilizamos equipos de grabación discretos y nos coordinamos cuidadosamente con el personal del evento para asegurarnos de que nuestro trabajo sea lo menos intrusivo posible.',
        ],
        [
            'pregunta' => '¿Ofrecen opciones de edición personalizadas para adaptarse a nuestras necesidades específicas de contenido y estilo?',
            'respuesta' => 'Sí, nos especializamos en ofrecer servicios de edición personalizados que se ajusten a las necesidades y preferencias únicas de cada cliente. Desde el estilo de edición hasta la selección de música y gráficos, trabajamos estrechamente con usted para crear un video que refleje fielmente su visión y mensaje.',
        ],
        [
            'pregunta' => '¿Qué medidas toman para garantizar la seguridad y confidencialidad de nuestros datos y contenido durante todo el proceso de producción?',
            'respuesta' => 'Implementamos estrictas medidas de seguridad y confidencialidad para proteger sus datos y contenido en cada etapa del proceso de producción. Desde la firma de acuerdos de confidencialidad hasta el uso de tecnologías seguras de almacenamiento y transmisión de datos, nos comprometemos a proteger su información con el más alto nivel de seguridad.',
        ],
        [
            'pregunta' => '¿Ofrecen opciones de distribución y promoción del video después de la conferencia?',
            'respuesta' => 'Sí, ofrecemos servicios de distribución y promoción del video para ayudarlo a maximizar el alcance y el impacto de su contenido después de la conferencia. Desde la publicación en plataformas en línea hasta la creación de campañas de marketing digital, estamos aquí para ayudarlo a compartir su mensaje con su audiencia objetivo.',
        ]
    ];

    return view('pages.pro-audiovisual.streaming', compact('faq'));
});

Route::get('/pro-audiovisual/realidad-virtual', function () {

    $faq = [
        [
            'pregunta' => '¿Cómo garantizan la autenticidad y la objetividad en la realización de un documental?',
            'respuesta' => 'En nuestra producción de documentales, nos comprometemos a mantener altos estándares de integridad y objetividad. Trabajamos estrechamente con fuentes confiables y verificamos cuidadosamente los hechos y la información presentada en el documental para asegurarnos de que sea precisa y equilibrada. Además, nos esforzamos por capturar la esencia y la autenticidad de las historias que contamos, respetando la diversidad de opiniones y experiencias.',
        ],
        [
            'pregunta' => '¿Cuál es su enfoque para seleccionar temas y narrativas para un documental?',
            'respuesta' => 'Nuestro enfoque para seleccionar temas y narrativas para un documental se basa en la investigación exhaustiva y la comprensión profunda de los temas relevantes y significativos. Trabajamos en estrecha colaboración con nuestros clientes para identificar historias impactantes y relevantes que resuenen con la audiencia objetivo. Además, nos esforzamos por encontrar ángulos únicos y perspectivas originales que agreguen valor y profundidad al documental.',
        ],
        [
            'pregunta' => '¿Qué recursos y equipos utilizan para garantizar la calidad técnica y visual de un documental?',
            'respuesta' => 'Utilizamos una combinación de equipos de alta calidad y técnicas de producción avanzadas para garantizar la calidad técnica y visual de nuestros documentales. Nuestro equipo está equipado con cámaras profesionales, equipos de audio y sistemas de iluminación de última generación para capturar imágenes nítidas y sonido claro. Además, contamos con un equipo de postproducción experimentado que utiliza software de edición profesional para dar vida a las historias de manera visualmente impactante y cautivadora.',
        ]
    ];

    return view('pages.pro-audiovisual.realidad-virtual', compact('faq'));
});

Route::get('/pro-audiovisual/tour-vr', function () {

    $faq = [];

    return view('pages.pro-audiovisual.tour-vr', compact('faq'));
});

Route::get('/pro-audiovisual/drone', function () {

    $faq = [];

    return view('pages.pro-audiovisual.drone', compact('faq'));
});

Route::get('/pro-audiovisual/tour360', function () {

    $faq = [];

    return view('pages.pro-audiovisual.tour360', compact('faq'));
});

Route::get('/pro-audiovisual/foto-corporativa', function () {

    $faq = [
        [
            'pregunta' => '¿Cuál es el proceso de creación de un video de spot publicitario?',
            'respuesta' => 'Nuestro proceso de creación de un video de spot publicitario comienza con una reunión inicial para comprender las necesidades y objetivos de la marca. Luego, nuestro equipo creativo desarrolla un concepto único y atractivo que resuene con la audiencia objetivo. Una vez aprobado el concepto, procedemos con la preproducción, que incluye la planificación del rodaje, la selección de locaciones, el casting de talento y la elaboración del guion. La producción implica la filmación del spot publicitario utilizando equipos de alta calidad y técnicas cinematográficas profesionales. Finalmente, en la postproducción, editamos el material grabado, añadimos efectos visuales y de sonido, y pulimos el video para obtener un resultado final impactante y memorable.',
        ],
        [
            'pregunta' => '¿Cómo aseguran que el mensaje de la marca se transmita de manera efectiva en el video publicitario?',
            'respuesta' => 'Nos aseguramos de comprender a fondo la identidad y los valores de la marca antes de iniciar la producción del video publicitario. Trabajamos estrechamente con nuestros clientes para capturar la esencia de su marca y transmitir su mensaje de manera efectiva a través del video. Utilizamos elementos visuales, narrativos y emocionales cuidadosamente seleccionados para conectar con la audiencia y comunicar el mensaje de la marca de manera clara y convincente.',
        ],
        [
            'pregunta' => '¿Cuál es el alcance de personalización y adaptación del video publicitario para diferentes plataformas y audiencias?',
            'respuesta' => 'Entendemos la importancia de adaptar el contenido publicitario para diferentes plataformas y audiencias. Trabajamos con nuestros clientes para desarrollar versiones del video optimizadas para su uso en televisión, medios digitales y redes sociales. Además, podemos personalizar el mensaje, el tono y los elementos visuales del video para adaptarse a diferentes segmentos de la audiencia y maximizar su impacto. Nuestro objetivo es crear videos publicitarios versátiles y efectivos que generen resultados positivos para la marca.',
        ]
    ];

    return view('pages.pro-audiovisual.foto-corporativa', compact('faq'));
});

// Impreciones
Route::get('/impresiones/credenciales', function () {

    $faq = [];

    return view('pages.impresiones.credenciales', compact('faq'));
});

Route::get('/impresiones/photobook', function () {

    $faq = [];

    return view('pages.impresiones.photobook', compact('faq'));
});

Route::get('/impresiones/titulosdiplomas', function () {

    $faq = [];

    return view('pages.impresiones.titulos_diplomas', compact('faq'));
});

// Producción de Eventos
Route::get('/pro-eventos/cafetera-automatica', function () {

    $faq = [];

    return view('pages.pro-eventos.cafetera-automatica', compact('faq'));
});

Route::get('/pro-eventos/catering-corp', function () {

    $faq = [];

    return view('pages.pro-eventos.catering-corp', compact('faq'));
});

Route::get('/pro-eventos/photobooth-360', function () {

    $faq = [];

    return view('pages.pro-eventos.photobooth-360', compact('faq'));
});

Route::get('/pro-eventos/foto-iglu', function () {

    $faq = [];

    return view('pages.pro-eventos.foto-iglu', compact('faq'));
});

Route::get('/pro-eventos/karaoke', function () {

    $faq = [];

    return view('pages.pro-eventos.karaoke', compact('faq'));
});

Route::get('/pro-eventos/panel-led', function () {

    $faq = [];

    return view('pages.pro-eventos.panel-led', compact('faq'));
});

// Colegios /Blogs colegios


// Promociones
Route::get('/colegios/promocion', function () {

    $faq = [];

    return view('pages.colegios.promocion', compact('faq'));
});

// Comuniones
Route::get('/colegios/comunion', function () {

    $faq = [];

    return view('pages.colegios.comunion', compact('faq'));
});

// Confirmación
Route::get('/colegios/confirmacion', function () {

    $faq = [];

    return view('pages.colegios.confirmacion', compact('faq'));
});

// Kinder
Route::get('/colegios/kinder', function () {

    $faq = [];

    return view('pages.colegios.kinder', compact('faq'));
});

// Photobook 20X20
Route::get('/colegios/p20', function () {

    $faq = [];

    return view('pages.colegios.photobook20', compact('faq'));
});

// Photobook 25X25
Route::get('/colegios/p25', function () {

    $faq = [];

    return view('pages.colegios.photobook25', compact('faq'));
});

// Photobook 30X30
Route::get('/colegios/p30', function () {

    $faq = [];

    return view('pages.colegios.photobook30', compact('faq'));
});

// Photobook A4
Route::get('/colegios/pa4', function () {

    $faq = [];

    return view('pages.colegios.photobookA4', compact('faq'));
});
