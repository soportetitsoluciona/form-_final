const formulario = document.getElementById('formulario');
const inputs = document.querySelectorAll('#formulario input');

const expresiones = {
    //-------------------------------
    correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
    telefono: /^\d{9}$/,
    nacionalidad: /^[a-zA-ZÀ-ÿ]+$/,
    departamento: /^[a-zA-ZÀ-ÿ]+$/,
    distrito: /^[a-zA-ZÀ-ÿ]+$/,
    provincia: /^[a-zA-ZÀ-ÿ]+$/,
    peso: /^[0-9]+.[0-9]$/,
    estatura: /^[0-9]+.[0-9]$/,
    tallazapatos: /^[0-9]{2}$/
        //-------------------------------
        //letras: /^[a-zA-Z]{3,20}$/, // Letras, numeros, guion y guion_bajo
        // nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
        //numero: /^.{4,12}$/, // 4 a 12 digitos.

}

const campos = {
    correo: false,
    telefono: false,
    nacionalidad: false,
    departamento: false,
    distrito: false,
    provincia: false,
    peso: false,
    estatura: false,
    tallazapatos: false
}

const validarFormulario = (e) => {
    switch (e.target.name) {
        case "correo":
            validarCampo(expresiones.correo, e.target, 'correo');
            break;
        case "telefono":
            validarCampo(expresiones.telefono, e.target, 'telefono');
            break;
        case "nacionalidad":
            validarCampo(expresiones.nacionalidad, e.target, 'nacionalidad');
            break;
        case "departamento":
            validarCampo(expresiones.departamento, e.target, 'departamento');
            break;
        case "distrito":
            validarCampo(expresiones.distrito, e.target, 'distrito');
            break;
        case "provincia":
            validarCampo(expresiones.provincia, e.target, 'provincia');
            break;
        case "peso":
            validarCampo(expresiones.peso, e.target, 'peso');
            break;

        case "estatura":
            validarCampo(expresiones.estatura, e.target, 'estatura');
            break;
        case "tallazapatos":
            validarCampo(expresiones.tallazapatos, e.target, 'tallazapatos');
            break;

    }
}

const validarCampo = (expresion, input, campo) => {
    if (expresion.test(input.value)) {
        document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-incorrecto');
        document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-correcto');
        document.querySelector(`#grupo__${campo} i`).classList.add('fa-check-circle');
        document.querySelector(`#grupo__${campo} i`).classList.remove('fa-times-circle');
        document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.remove('formulario__input-error-activo');
        campos[campo] = true;
    } else {
        document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-incorrecto');
        document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-correcto');
        document.querySelector(`#grupo__${campo} i`).classList.add('fa-times-circle');
        document.querySelector(`#grupo__${campo} i`).classList.remove('fa-check-circle');
        document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.add('formulario__input-error-activo');
        campos[campo] = false;
    }
}

inputs.forEach((input) => {
    input.addEventListener('keyup', validarFormulario);
    input.addEventListener('blur', validarFormulario);
});

formulario.addEventListener('submit', (e) => {
    e.preventDefault();

    const terminos = document.getElementById('terminos');
    if (campos.letras && campos.nombre && campos.numero && campos.correo && campos.telefono && terminos.checked) {
        formulario.reset();

        document.getElementById('formulario__mensaje-exito').classList.add('formulario__mensaje-exito-activo');
        setTimeout(() => {
            document.getElementById('formulario__mensaje-exito').classList.remove('formulario__mensaje-exito-activo');
        }, 5000);

        document.querySelectorAll('.formulario__grupo-correcto').forEach((icono) => {
            icono.classList.remove('formulario__grupo-correcto');
        });
    } else {
        document.getElementById('formulario__mensaje').classList.add('formulario__mensaje-activo');
    }
});

$('#buscar').click(function() {
    dni = $('#documento').val();
    $.ajax({
        url: 'Controlador/consultaDNI.php',
        type: 'post',
        data: 'dni=' + dni,
        dataType: 'json',
        success: function(r) {
            if (r.numeroDocumento == dni) {
                $('#apellidoPaterno').val(r.apellidoPaterno);
                $('#apellidoMaterno').val(r.apellidoMaterno);
                $('#nombre').val(r.nombres);
            } else {
                alert(r.error);
            }
            console.log(r)
        }
    });
});


// ==================================== CALCULO DEL IMC  ====================================
const imc = document.querySelector('#imc')
const detalleIMC = document.querySelector('#detalleIMC')
const estatura = document.querySelector('#estatura')
const peso = document.querySelector('#peso')

const calcIMC = () => {

    if (estatura.value !== '' && peso.value !== '') {
        const imc = (peso.value / (estatura.value * estatura.value)).toFixed(2)
        let classification = ''

        if (imc < 18.5) {
            classification = 'Bajo Peso'
        } else if (imc > 18.5 && imc < 24.9) {
            classification = 'Peso normal'
        } else if (imc > 25 && imc < 29.9) {
            classification = 'Sobre Peso'
        } else if (imc > 30 && imc < 34.9) {
            classification = 'Obesidad Leve'
        } else if (imc > 35 && imc < 39.9) {
            classification = 'Obesidad Leve'
        } else {
            classification = 'Obesidad Morbida'
        }

        imc.innerHTML = `${imc}`;
        detalleIMC.innerHTML = `${classification}`;

    }
}