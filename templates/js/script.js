function tithe() {
    let tithe = document.getElementById("tithe").value;
    console.log("Tithe: " + tithe);

    if(tithe != 0){
        let tithe_amount = "amount-"+tithe;
        console.log("Tithe amount: " + tithe_amount);

        let plus = document.getElementById("plus").value;
        console.log("Plus: " + plus);

        let tithe_num = document.getElementById(tithe_amount).innerHTML;
        console.log("Tithe num: " + tithe_num);

        let tithe_multiplier = document.getElementById("tithe_multiplier").value;
        console.log("Tithe multiplier: " + tithe_multiplier);

        let feline_num = document.getElementById("feline_num").value;
        console.log("Feline num: " + feline_num);

        let suma = (parseInt(tithe_num) + parseInt(plus));
        console.log("Suma: " + suma);
        let subtotal = (parseInt(tithe_num) + parseInt(plus)) * parseInt(tithe_multiplier);
        console.log("Subtotal: " + subtotal);
        let discount = subtotal * parseInt(feline_num) / 100;
        console.log("Descuento: "+ discount);
        let total = subtotal - discount;
        console.log("Total" + total);

        let msj = '';
        if (discount !== 0) msj = `<span class="discount">¡Ahorrás $ ${discount.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ' ')}!</span>`;

        document.getElementById("price").innerHTML = `$ ${total.toFixed(2).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ' ')}${msj}`;
    } else {
        alert("Sin datos para calcular.");
    }
}

function reset() {
    document.getElementById("price").innerHTML = '$0';
    document.getElementById("tithe").value = '0';
    document.getElementById("plus").value = '0';
    document.getElementById("tithe_multiplier").value = '1';
    document.getElementById("feline_num").value = '0';
}

if(document.getElementById("formtithe")){
    document.getElementById("resume").addEventListener("click", tithe);
    document.getElementById("reset").addEventListener("click", reset);
}