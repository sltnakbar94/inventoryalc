
<div class="table">
    <table class="table no-border">
        <tr>
            <td>Tanggal Sales Order</td>
            <td><strong>{{ date('d M Y', strtotime($crud->entry->ds_date)) }}</strong></td>
        </tr>
        <tr>
            <td>Ekspedisi</td>
            <td><strong>{{ $crud->entry->expedition }}</strong></td>
        </tr>
        <tr>
            <td>Nama Driver</td>
            <td><strong>{{ $crud->entry->driver }}</strong></td>
        </tr>
        <tr>
            <td>Kontak Driver</td>
            <td><strong>{{ $crud->entry->driver_phone }}</strong></td>
        </tr>
        <tr>
            <td>Estimasi Keberangkatan</td>
            <td><strong>{{ date('d M Y', strtotime($crud->entry->etd)) }}</strong></td>
        </tr>
    </table>
</div>
