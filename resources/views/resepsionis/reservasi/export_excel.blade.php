<table>
    <thead>
        <tr>
            <th>No.</th>
            <th>Tanggal Check-in</th>
            <th>Tanggal Check-out</th>
            <th>ID Kamar</th>
            <th>Nama Pemesan</th>
            <th>No. Pemesan</th>
            <th>Email Pemesan</th>
            <th>NIK</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($reservasi as $index => $reservasi)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $reservasi->tanggal_check_in }}</td>
                <td>{{ $reservasi->tanggal_check_out }}</td>
                <td>{{ $reservasi->kamar_id }}</td>
                <td>{{ $reservasi->nama_pemesan }}</td>
                <td>{{ $reservasi->no_pemesan }}</td>
                <td>{{ $reservasi->email_pemesan }}</td>
                <td>{{ $reservasi->nik }}</td>
                <td>{{ $reservasi->status }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
