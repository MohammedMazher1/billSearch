
$('#uploadIcon').on('click', function () {
    $('#uploadInput').focus().trigger('click');
});

$('#searchBtn').on('click', function () {
    const billNo = $('#searchInput').val();
    const responseData = fetch('http://127.0.0.1:8000/search/'+billNo);
    responseData
        .then(response => {
            // Check if the request was successful
            if (!response.ok) {
                $('#searchError').append('<span>ليس هناك فاتورة</span>');
                $('#searchError').css('display', 'inline-block')
            }
            // Parse the response as JSON
            return response.json();
        })
        .then(data => {
            // Handle the JSON data
            console.log(data.no);
            $('#billTable tr#billRow').remove()
                $('#billTable').append(
                    `<tr class="odd" id="billRow">
                            <td>${data.no}</td>
                            <td>${data.contract_No}</td>
                            <td>${data.name}</td>
                            <td>${data.preAmount}</td>
                            <td>${data.currAmount}</td>
                            <td>${data.amount}</td>
                        </tr>`
                )
        })

});