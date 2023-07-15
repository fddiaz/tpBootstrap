function tithe() {
    const tithePrices = {
        "1": 30000,
        "2": 15000,
        "3": 7000
    };
    const plusValue = {
        "0": 0,
        "1": 100,
        "2": 5000,
        "3": 10000
    };
    const feline_discount = {
        "0": 0,
        "1": 0,
        "2": 15,
        "3": 50,
        "4": 80
    };

    let tithe = document.getElementById("tithe").value;
    console.log(tithe);
    let plus = document.getElementById("plus").value;
    console.log(plus);
    let tithe_num = document.getElementById("tithe_num").value;
    console.log(tithe_num);
    let feline_num = document.getElementById("feline_num").value;
    console.log(feline_num);

    if (tithe != "0") {
        let subtotal = (tithePrices[tithe] + plusValue[plus]) * tithe_num;
        let discount = subtotal * feline_discount[feline_num] / 100;
        let total = subtotal - discount;

        let msj = '';
        if (discount !== 0) msj = `<span class="discount">¡Ahorrás $${discount.toString().replace(/\B(?=(\d{3})+(?!\d))/g, '.')}!</span>`;

        document.getElementById("price").innerHTML = `$${total.toString().replace(/\B(?=(\d{3})+(?!\d))/g, '.')}${msj}`;
    } else {
        alert("Sin datos para calcular.");
    }
}

function reset() {
    document.getElementById("price").innerHTML = '$0';
    document.getElementById("tithe").value = '0';
    document.getElementById("plus").value = '0';
    document.getElementById("tithe_num").value = '1';
    document.getElementById("feline_num").value = '';
}

if(document.getElementById("formtithe")){
    document.getElementById("resume").addEventListener("click", tithe);
    document.getElementById("reset").addEventListener("click", reset);
}