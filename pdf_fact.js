function agregarProducto() {
            const productosDiv = document.getElementById('productos');
            const nuevoProducto = document.createElement('div');
            nuevoProducto.classList.add('producto');

            nuevoProducto.innerHTML = `
                <label for="descripcion[]">Descripción:</label>
                <input type="text" id="descripcion[]" name="descripcion[]" required><br><br>

                <label for="cantidad[]">Cantidad:</label>
                <input type="number" step="0.01" id="cantidad[]" name="cantidad[]" required><br><br>

                <label for="precioUnitario[]">Precio Unitario:</label>
                <input type="number" step="0.01" id="precioUnitario[]" name="precioUnitario[]" required><br><br>

                <label for="descuento[]">Descuento:</label>
                <input type="number" step="0.01" id="descuento[]" name="descuento[]" value="0.00" required><br><br>
            `;

            productosDiv.appendChild(nuevoProducto);
        }

        function generarPDF() {
    const { jsPDF } = window.jspdf;
    const doc = new jsPDF();

    // Título de la Factura
    doc.setFontSize(22);
    doc.text('FACTURA', 105, 15, null, null, 'center');

    // Información del Cliente
    doc.setFontSize(16);
    doc.text('Información del Cliente', 10, 30);
    doc.setFontSize(12);
    doc.text(`Razón Social: ${document.getElementById('razonSocialCliente').value}`, 10, 40);
    doc.text(`RUC o Cédula: ${document.getElementById('rucCliente').value}`, 10, 50);
    doc.text(`Fecha de Emisión: ${document.getElementById('fechaEmision').value}`, 10, 60);

    // Información de la Factura
    doc.setFontSize(16);
    doc.text('Información de la Factura', 10, 80);
    doc.setFontSize(12);
    doc.text(`Total Sin Impuestos: ${document.getElementById('totalSinImpuestos').value}`, 10, 90);
    doc.text(`Total Descuento: ${document.getElementById('totalDescuento').value}`, 10, 100);

    // Detalles de Productos - Cabecera
    doc.setFontSize(16);
    doc.text('Detalles de Productos', 10, 120);
    doc.setFontSize(12);
    doc.line(10, 125, 200, 125); // Línea divisoria
    doc.text('Descripción', 10, 130);
    doc.text('Cantidad', 90, 130);
    doc.text('Precio Unitario', 130, 130);
    doc.text('Descuento', 170, 130);
    doc.line(10, 135, 200, 135); // Línea divisoria

    // Detalles de Productos - Filas
    let yOffset = 140;
    const productos = document.getElementsByClassName('producto');
    for (let i = 0; i < productos.length; i++) {
        const descripcion = productos[i].querySelector('input[name="descripcion[]"]').value;
        const cantidad = productos[i].querySelector('input[name="cantidad[]"]').value;
        const precioUnitario = productos[i].querySelector('input[name="precioUnitario[]"]').value;
        const descuento = productos[i].querySelector('input[name="descuento[]"]').value;

        doc.text(descripcion, 10, yOffset);
        doc.text(cantidad, 90, yOffset);
        doc.text(precioUnitario, 130, yOffset);
        doc.text(descuento, 170, yOffset);

        yOffset += 10;
    }

    // Total General
    yOffset += 10;
    doc.setFontSize(16);
    doc.text('Totales', 10, yOffset);
    doc.line(10, yOffset + 5, 200, yOffset + 5); // Línea divisoria
    doc.setFontSize(12);
    yOffset += 10;
    doc.text(`Subtotal: ${document.getElementById('totalSinImpuestos').value}`, 10, yOffset);
    yOffset += 10;
    doc.text(`IVA: 12`, 10, yOffset);
    yOffset += 10;
    

    // Guardar el PDF
    doc.save('factura.pdf');
}
