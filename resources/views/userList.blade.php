<div>
    <!-- Breathing in, I calm body and mind. Breathing out, I smile. - Thich Nhat Hanh -->
    <h1>Uers List</h1>








    <table border='1'>
        <tr>
            <td>Name</td>
            <td>Email</td>
            <td>Password</td>
            <td>Cdate</td>
            <td>Udate</td>
        </tr>
        @foreach($users as $data)
        <tr>
            <td>{{$data->name}}</td>
            <td>{{$data->email}}</td>
            <td>{{$data->password}}</td>
            <td>{{$data->created_at}}</td>
            <td>{{$data->updated_at}}</td>
        </tr>
        @endforeach
    </table>
</div>
