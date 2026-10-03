<div>
    <!-- Life is available only in the present moment. - Thich Nhat Hanh -->
     <h1>Students List</h1>

     <table border =1>
        <tr>
            <td>Name</td>
            <td>email</td>
            <td>Batch No</td>
            <td>Created Date</td>
            <td>Updated Date</td>
        </tr>
        <tr>
            @foreach($students as $data)
            <td>{{$data['name']}}</td>
            <td>{{$data['email_id']}}</td>
            <td>{{$data['batch_no']}}</td>
            <td>{{$data['cdate']}}</td>
            <td>{{$data['udate']}}</td>
            @endforeach
        </tr>
     </table>
</div>
