function validate_info(){
    if(document.getElementById('name').value.length == 0 || document.getElementById('age').value.length == 0 || document.getElementById('gender').value.length == 0 || document.getElementById('address').value.length == 0 || document.getElementById('country').value.length == 0){
        document.getElementById('button_info').disabled=true
    }else{
        document.getElementById('button_info').disabled=false
        console.log(document.getElementById('name').value)
    }
}

setInterval(validate_info, 500);



const $select = document.querySelector("#state");



const opcionCambiada = () => {
  console.log("Cambio");
};

$select.addEventListener("change", opcionCambiada);

const agregar_MX_AC = () => {
  const option = document.createElement('option');
  const valor = 'Aguas Calientes';
  option.value = valor;
  option.text = valor;
  $select.appendChild(option);
};
const agregar_MX_CDMX = () => {
    const option = document.createElement('option');
    const valor = 'Ciudad de Mexico';
    option.value = valor;
    option.text = valor;
    $select.appendChild(option);
  };

const limpiar = () => {
  for (let i = $select.options.length; i >= 0; i--) {
    $select.remove(i);
  }
};

const agregar_EUA_CB = () =>{
  const option = document.createElement('option');
  const valor = 'Columbia';
  option.value = valor;
  option.text = valor;
  $select.appendChild(option);
    
}

const agregar_EUA_TX = () =>{
    const option = document.createElement('option');
    const valor = 'Texas';
    option.value = valor;
    option.text = valor;
    $select.appendChild(option);
      
}


const option = () =>{
    if(document.querySelector("#country").value == 'MX'){
        limpiar()
        agregar_MX_AC();
        agregar_MX_CDMX();
    }else if(document.querySelector("#country").value == 'EUA'){
        limpiar();
        agregar_EUA_CB();
        agregar_EUA_TX();
    }else{
        limpiar();
        const option = document.createElement('option');
        const valor = 'Apareceran los estados dependiendo del pais elegido';
        option.value = valor;
        option.text = valor;
        $select.appendChild(option);
        
    }
    
}


document.addEventListener("DOMContentLoaded", () => {
    document.querySelector("#country").addEventListener('change', option)
       
    
    
  
});
