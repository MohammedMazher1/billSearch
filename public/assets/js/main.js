
$('#uploadIcon').on('click', function () {
    $('#uploadInput').focus().trigger('click');
});

$('#billUploadBtn').on('click', function () {
    $('.confirmDiv').css('display','flex');
});
$('#cancel').on('click', function () {
    $('.confirmDiv').css('display','none');
});

$('#searchBtn').on('click', function () {
    const billNo = $('#searchInput').val();
    console.log(billNo);
    if (!billNo) {
        $('#searchError').text('أدخل رقم الفاتورة');
        $('#searchError').css('display', 'inline-block')
        return false;
    }
    const responseData = fetch('http://127.0.0.1:8000/search/' + billNo);
    responseData
        .then(response => {
            // Check if the request was successful
            if (!response.ok) {
                $('#searchError').text('ليس هناك فاتورة');
                $('#searchError').css('display', 'inline-block')
            }
            // Parse the response as JSON
            return response.json();
        })
        .then(data => {
            $('#searchError').css('display', 'none')
            // Handle the JSON data
            console.log(data.no);
            $('#billTable tr#billRow').remove()
            console.log(data);
            if (data.status == 'false') {
                $('#searchError').text(data.message);
                $('#searchError').css('display', 'inline-block')
            } else {
                $('#billTable').append(
                    `<tr class="odd" id="billRow">
                                <td>${data.BRANCH_NO}</td>
                                <td>${data.CONTRACT_NO}</td>
                                <td>${data.NAME}</td>
                                <td>${data.P_MONTH}</td>
                                <td>${data.P_YEAR}</td>
                                <td>${data.PREV_BILL_AMOUNT}</td>
                                <td>${data.CUR_MON_TOT_BIL}</td>
                                <td>12000.00</td>
                            </tr>`
                )
            }

        })

});