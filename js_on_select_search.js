<script>
    function searchReport() {
        var selectedDate = document.getElementById('changer').value;
        var urlMaker = "{{ url('/daily/report/') }}/" + selectedDate;
        location.replace(urlMaker)
    }
</script>
<input type="date" value="{{ $date }}" onchange="searchReport()" class="form-control" id="changer">
