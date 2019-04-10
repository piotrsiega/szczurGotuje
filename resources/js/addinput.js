// Zmienne odpowiedzialne za dodanie kolejnego pola na składniki
var addComponentIcon = document.querySelector('.addComp'),
    componentsContainer = document.querySelector('.componentsContainer'),
    compAmount = 1,
// Zmienne odpowiedzialne za dodanie kolejnego pola z krokiem do wykonania
    addStepIcon = document.querySelector('.addStep'),
    stepContainer = document.querySelector('.stepsContainer'),
    stepAmount = 1;


//Zdarzenie oraz funkcja dodająca kolejne pole ze składnikiem
    addComponentIcon.onclick = function(){
        if (compAmount <= 4){
            compAmount++;
            var newComp = document.createElement('input');
            newComp.type = "text";
            newComp.name = "component"+compAmount;
            newComp.id = "component"+compAmount;
            newComp.className = "form-control form-control-lg border border-dark mb-3";
            console.dir(newComp.outerHTML);
            componentsContainer.appendChild(newComp).focus();
        }
    }

//Zdarzenie oraz funkcja dodająca kolejne pole ze składnikiem
    addStepIcon.onclick = function(){
        stepAmount++;
        var newStep = document.createElement('input');
        newStep.type = "text";
        newStep.name = "step"+stepAmount;
        newStep.id = "step"+stepAmount;
        newStep.className = "form-control form-control-lg border border-dark mb-3";
        stepContainer.appendChild(newStep).focus();
    }
