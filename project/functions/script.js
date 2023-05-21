function calculateTotal() {
    var harga = document.getElementById('harga').value;
    var jumlah = document.getElementById('jumlah').value;
    var total = harga * jumlah;
    document.getElementById('total').value = total;
}

calculateTotal();