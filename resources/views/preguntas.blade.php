@extends('master')

	@section ('title')
		Preguntas Frecuentes
	@endsection

	@section ('content')
    <h1 class="titulo">Preguntas Frecuentes</h1>
	</br>
	<div class="accordion" id="accordionExample">
      <div class="card">
        <div class="card-header" id="headingOne">
          <h2 class="mb-0">
            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              ¿Qué es una notario?
          </h2>
        </div>
      <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
        <div class="card-body">
          <p>El Notario es una persona, un Profesionista altamente especializado, que ejerce su Oficio en el campo del Derecho a quién, 
          	por sus cualidades humanas de honorabilidad, calidad, integridad y ética, y desde luego profesionales, el Estado le delega, 
          	previo cumplimiento de un amplio abanico de requisitos legales, la fé pública para que en representación de éste, intervenga 
          	en los actos y contratos que realiza la sociedad, dotándolos de seguridad, autenticidad y fuerza probatoria.</p>

          <p>El Notario es un hombre completo, es un hombre de Servicio, cuya responsabilidad suprema es dar seguridad jurídica en los 
          	actos y operaciones que ante él se celebren. </p>
        </div>
      </div>
    </div>
    
    <div class="card">
      <div class="card-header" id="headingTwo">
        <h2 class="mb-0">
          <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            ¿En qué consiste la función notarial?
          </button>
        </h2>
      </div>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
        <div class="card-body">
          <p>Fundamental y brevemente la función notarial consiste en:
          <ul>
          	<li>Juntar y con paciencia escuchar a las partes a fin de determinar la posibilidad legal de llevar a cabo lo que éstas 
          		pretenden. Si ello es legalmente posible, definir el instrumento, contrato o acto jurídico que quieren celebrar. </li>
          	<li>Redactar , con previa identificación de las partes, el instrumento o contrato que corresponde, de acuerdo con las 
          		pretensiones o necesidades de éstas, siempre en apego y de conformidad con las disposiciones legales aplicables.</li>
          	<li>Explicar a las partes, una vez ya redactado y leído a éstas el contrato respectivo, su alcance y fuerza legales , y en 
          		presencia del Notario, proceder a la firma del contrato correspondiente, para que éste lo autorice y se genere el 
          		instrumento público o escritura, que es un documento que tendrá valor probatorio pleno, es decir que hará prueba plena 
          		dentro y fuera de juicio, a excepción que sea declarado nulo por autoridad judicial competente. </li>
          	<li>Efectuar los pagos de las respectivas contribuciones federales, estatales y municipales correspondientes a la operación
          		y proceder a la inscripción del acto jurídico o contrato, en el Registro Público de la Propiedad.</li>
          	<li>Conservar bajo su custodia los originales del contrato y expedir copias certificadas tantas como sean necesarias.</li>
          </ul>
        </div>
      </div>
    </div>
  
    <div class="card">
      <div class="card-header" id="headingThree">
        <h2 class="mb-0">
          <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            Ventajas y beneficios de la intervención de un Notario
          </button>
        </h2>
      </div>
      <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
        <div class="card-body">
          <ul>
          	<li>Las partes pueden tener la certeza de la legitimización e identificación de las mismas y evitar la suplantación ya que
          		el Notario se cerciora y las verifica.</li>
          	<li>Las partes pueden contar con la asesoría y consejo del Notario antes de la celebración de algún contrato para evitar 
          		trámites, juicios y gastos innecesarios. El Notario no es sólo un Profesionista, sino un hombre que actúa en el marco 
          		del Derecho con calidad, honorabilidad, integridad y ética buscando permanentemente la seguridad jurídica.</li>
          	<li>El Notario verifica y se cerciora que el enajenante sea realmente el propietario o en su defecto, que cuente con las 
          		facultades necesarias y suficientes para comparecer en carácter de representante del propietario.</li>
          	<li>El Notario verifica y se cerciora que el inmueble motivo de operación, no reporte gravámenes que puedan limitar la 
          		libre transmisión del dominio, como por ejemplo hipotecas, fianzas etc. y se encarga de recaudar todas las 
          		contribuciones, federales, estatales y municipales que se causen con motivo de la mencionada operación.</li>
          	<li>El Notario evita riesgos innecesarios para los contratantes ya que en la redacción y elaboración de los contratos que 
          		se pretenden formular, se cerciora de que se reúnan los requisitos establecidos por las leyes vigentes.</li>
          	<li>El Notario en su honestidad de servicio e imparcialidad, evita situaciones que pudiesen dar ventaja a alguna de las 
          		partes en perjuicio de la otra.</li>
          	<li>Al contar con la Participación de un Notario, se evita la pérdida, destrucción, etc. del contrato efectuado, pues lo 
          		que se entrega a los contratantes son copias certificadas o testimonios, y el original se conserva en el protocolo 
          		de la Notaría.</li>
          </ul>
        </div>
      </div>
    </div>

	<div class="card">
      <div class="card-header" id="headingFour">
        <h2 class="mb-0">
          <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
            La Hipoteca
          </button>
        </h2>
      </div>
      <div id="collapseFour" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
        <div class="card-body">
          <p>Una de las cosas más importantes que se deben tomar en cuanta a la hora de prestar dinero, es garantizar el cumplimiento 
          	de la obligación por parte del deudor, es decir, asegurar que la suma de dinero que entreguemos, nos sea devuelta junto con 
          	los intereses ordinarios, moratorios cualquier otra prestación adicional que se haya convenido a favor del acreedor.</p>
          <p>La ley contempla diversos mecanismos de garantía, siendo la hipoteca uno de los más comunes, sobre todo en relación con créditos 
          	destinados a la adquisición de vivienda y para garantizar obligaciones de pago que por su monto se considera necesario garantizar, 
          	a fin de no correr el riesgo de un incumplimiento.</p>
          <p>Podemos definir a la hipoteca como el contrato por virtud del cual se crea un derecho real de garantía, que se constituye, 
          	por regla general, sobre bienes inmuebles y que dan derecho al acreedor, en caso de que el deudor incumpla con la obligación 
          	garantizada, a ser pagado con el valor de los bienes, en el grado de `referencia establecido por la ley.</p>
          <p>La bondad de este contrato, radica en que el acreedor asegura el cumplimiento de la obligación con el valor de un bien 
          	inmueble específico y no queda sujeto a la suerte de que el deudor sea solvente o no a la hora de exigir el pago adeudado, 
          	ya que, en caso de incumplimiento por parte del deudor, y previa tramitación del juicio hipotecario correspondiente, 
          	el acreedor podrá adjudicarse dicho inmueble o dentro del juicio enajenarlo a un tercero y cobrar su adeudo con el precio 
          	pagado por este último. Además, la hipoteca garantiza que el acreedor hipotecario sea pagado con el valor del inmueble objeto 
          	de dicha garantía, de manera preferente respecto de cualquier otro acreedor que pueda existir y aún en el caso de que el deudor 
          	enajene el mencionado inmueble.</p>
          <p>Los derechos antes mencionados, derivados del contrato de hipoteca, surten sus efectos siempre y cuando se cumplan con las 
          	formalidades establecidas por la ley, que esencialmente podríamos decir que se constriñen a que dicho contrato sea otorgado 
          	en escritura ante notario y que dicho gravamen sea inscrito en el Registro Público de la Propiedad, por lo que debemos tener 
          	mucho cuidado con ciertos actos que comúnmente se celebran entre las partes y que no constituyen una hipoteca, como por 
          	ejemplo: otorgar la garantía de un contrato privado y sin inscripción en el Registro Público de la Propiedad o simplemente 
          	entregar el título de propiedad del inmueble al acreedor. Por todo lo anterior, es muy conveniente que se acuda ante el 
          	notario público a fin de obtener una asesoría correcta y completa a fin de correr riesgos.</p>
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-header" id="headingFive">
        <h2 class="mb-0">
          <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
            Fe de Hechos
          </button>
        </h2>
      </div>
      <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
        <div class="card-body">
          <p>La fe pública es la fe delegada a los notarios. El notario es el fedatario que más amplia gama de facultades tiene, debido 
          	a que casi la totalidad de las materias jurídicas requieren de su intervención. En la actualidad, su actuación tiene una sola 
          	limitante, que es la de intervenir en algún acto que esté reservado a otro funcionario, servidor o fedatario. </p>
          <p>La fe pública originaria se presenta cuando el hecho o acto del que se debe de dar fe fue percibido por los sentidos del 
          	notario.</p>
          <p>Acta notarial es el instrumento público original en el que el notario, a solicitud de parte interesada relaciona para hacer 
          	constar bajo su fe, uno o varios hechos presenciados por el o que le consten, y que asienta en los folios del protocolo a su 
          	cargo con la autorización de su firma y sello.</p>
          <p>Es importante que los hechos en materia del acta notarial le consten al notario, es decir, que haya presenciado 
          	directamente los hechos que se asientan en el instrumento público.</p>
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-header" id="headingSix">
        <h2 class="mb-0">
          <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
            Cancelación de Hipoteca
          </button>
        </h2>
      </div>
      <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
        <div class="card-body">
          <p>Es frecuente solicitar un crédito al momento de adquirir un bien inmueble, no obstante, el liquidar totalmente el importe 
          	del mismo, no implica que la hipoteca también haya quedado liberada, resulta necesario llevar a cabo un trámite más, esta 
          	operación se llama cancelación de hipoteca, y para ello se necesita: </p>
          <ul>
          	<li>Antecedentes de la propiedad, es decir el testimonio en donde constan los datos de identificación tanto del bien 
          		inmueble que adquirió como del crédito que le otorgaron y</li>
          	<li>Acudir a la institución, ya sea bancaria o gubernamental, que le otorgó el crédito para solicitar una carta de 
          		instrucción dirigida al notario de su confianza, el Dr. Othón Pérez Fernández del Castillo.</li>
          </ul>
          <p>Nosotros con mucho gusto nos encargaremos de realizar las gestiones necesarias, recabar la firmas correspondientes y 
          	enviar su testimonio el Registro Público de la propiedad para su oportuna inscripción, y listo, su inmueble estará libre 
          	de todo gravamen.</p>
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-header" id="headingSeven">
        <h2 class="mb-0">
          <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
            Mandato
          </button>
        </h2>
      </div>
      <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
        <div class="card-body">
          <p>El mandato es un contrato por el que el mandatario se obliga a ejecutar por cuenta del mandante los actos jurídicos que 
          	éste le encarga. </p>
          <p>El contrato de mandato se reputa perfecto por la aceptación del mandatario.</p>
          <p>El mandato que implica el ejercicio de una profesión se presume aceptado cuando es conferido a personas que ofrecen al 
          	público el ejercicio de su profesión, por el sólo hecho de que no lo rehúsen dentro de los tres días siguientes. La 
          	aceptación puede ser expresa o tácita. Aceptación tácita es todo acto en ejecución de un mandato.</p>
          <p>Pueden ser objeto de mandato todos los actos lícitos para los que la ley no exige la intervención personal del 
          	interesado.</p>
          <p>Solamente será gratuito el mandato cuando así se haya convenido expresamente.</p>
          <p>El mandato puede ser escrito o verbal.</p>
          <p>El mandato escrito puede otorgarse:</p>
          <ul>
          	<li>En escritura pública.</li>
          	<li>En escrito privado, firmado por el otorgante y dos testigos t ratificadas las firmas ante Notario Público, Juez de 
          		primera instancia, juez de paz, o ante el correspondiente funcionario o empleado administrativo, cuando el mandato 
          		se otorgue para asuntos administrativos; y </li>
          	<li>En carta poder sin ratificación de firmas.</li>
          </ul>
          <p>El mandato verbal es el otorgado de palabra entre presentes, hayan o no intervenido los testigos.</p>
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-header" id="headingEight">
        <h2 class="mb-0">
          <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
            Tutela Cautelar
          </button>
        </h2>
      </div>
      <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
        <div class="card-body">
          <p>Es el acto unilateral mediante el cual una persona estando en pleno uso de sus facultades, designa a una persona que se 
          	le llamará tutor para y a sus sustitutos para que en caso de que en un futuro no pueda gobernarse por sí mismo, éste cuide 
          	de su persona y de sus bienes. </p>
          <p>Este nombramiento excluye a las personas que pudiera corresponderle el servicio de la tutela conforme a la ley, es decir, 
          	cónyuge, hijos y hermanos. Y en caso de que no haya parientes evita que el nombramiento lo haga el juez.</p>
          <p>Este nombramiento se otorga ante notariopúblico mediante escritura, para lo cual la persona que solicite este servicio 
          	deberá presentarse a las instalaciones de está notaria con una identificación oficial.</p>
        </div>
      </div>
    </div>


  </div>


    	
  @endsection

