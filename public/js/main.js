var control = 1;

function addContato(){
    control ++;
    //console.log(control);
    // console.log(document.getElementById('formCad'));
    let contato=document.getElementById('contato');
    let  button=document.getElementById('button');

    if(contato)
    {
        contato.insertAdjacentHTML('beforeend', '<div class="col-sm-6" id="campo'+ 
        control +'">  <label for="" class="form-label">Telefone 02</label> <input type="text" name="contato_2" class="form-control"> </div>')
        button.style.display = 'none';
    }

}
