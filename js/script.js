class Validator { // incio class Validator 

    constructor() { // inicio constructor 
        this.validations = [
            'data-min-length', 

        ]

    } // final constructor 

    
                // inicia a validação de todos os campos 

    validate(form) { // inicio validação 

        // pegar todos os inputs
        let inputs = form.getElementsByTagName('input') ;

      
        // transformo HTML Collection -> array 
        let inputsArray = [...inputs];

        // loop nos inputs e validações mediante ao que for encontrado 
        inputsArray.forEach(function(input) {
        
            // loop em todas as validações existentes
            for(let i = 0; this.validations.length > i; i++) {
                
                //verifica se a validação atual existe no input
                if(input.getAttribute(this.validations [i] ) != null ) {

                    // dlimpando a string para virar um método 
                    let method = this.validations[i].replace('data-', '' ).replace('-', ' ' );

                    // valor do input 
                    let value = input.getAttribute(this.validations[i] )

                    // invocar o método 
                    this[method] (input, value);




                } // null

           
           
            } // if 







        }, this) ; // loop 


     


    }  // final validação 

// verifica se um input tem um número  mínimo de caracteres 
minlength(input, minValue) {

    let InputLength = input.value.length;

    let errorMessage = 'o campo precisa ter pelo menos ${minValue} caracteres' ; 

    if(inputLength < minValue) {
        console.log(errorMessage);


    }
    



}



} ; // final class Validator 




    let form = document. getElementById("register-form");
    let submit = document.getElementById("btn-submit");

    let validator =  new Validator() ;


    // Evento que dispara as validações

    submit.addEventListener('click', function(e)  {

    e.preventDefault();

    validator.validate(form);



}   )  ;