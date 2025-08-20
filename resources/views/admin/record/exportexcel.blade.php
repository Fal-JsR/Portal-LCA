<table>
    <thead>
        <tr>
            <th>Nama</th>
            <th>Tanggal</th>
            <th>Nama Perusahaan</th>
            <th>Nama Perusahaan Tambahan</th>
            <th>Keluhan/Kendala</th>
            <th>Status Pekerjaan</th>
            <th>Keterangan Progress/Pending</th>
            <th>Kebutuhan Perangkat</th>
            <th>Jenis</th>
            <th>Gambar</th>
        </tr>
    </thead>
    <tbody>
        @foreach($records as $record)
        <tr>
            <td>{{ $record->nama }}</td>
            <td>{{ $record->tanggal }}</td>
            <td>{{ $record->instansi->nama_instansi ?? '' }}</td>
            <td>{{ $record->nama_perusahaan_tambahan }}</td>
            <td>{{ $record->keluhan }}</td>
            <td>{{ $record->status }}</td>
            <td>{{ $record->keterangan_progress }}</td>
            <td>{{ $record->kebutuhan_perangkat }}</td>
            <td>{{ $record->jenis }}</td>
            <td>
                @if($record->gambar)
                    @foreach(json_decode($record->gambar, true) ?? [] as $img)
                        {{ asset('storage/' . $img) }}<br>
                    @endforeach
                @endif
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
