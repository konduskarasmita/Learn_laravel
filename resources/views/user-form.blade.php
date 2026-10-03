<div>
    <!-- @if($errors->any())
    @foreach($errors->all() as $error)
<div style="">
    {{$error}}
</div>
    @endforeach

    @endif -->
    <!-- Well begun is half done. - Aristotle -->
     <h2>Add New User</h2>
     <form action="adduser" method ="post">
        @csrf
        <h3>
            {{URL::current()}}
            {{url()->current()}}
        </h3>
         <h3>
            {{URL::full()}}
            {{url()->full()}}
        </h3>
        <div>
            <h4>Name</h4>
            <input type="text" name="username" id="username">
            <span style ="color:red;">@error('username'){{$message}}@enderror</span>
        </div>
        <div>
            <h4>User Skill</h4>
            <input type="checkbox" name="skill[]" value="PHP" id="php" >
            <label for="PHP">PHP</label>
            <input type="checkbox" name="skill[]" value="Node" id="Node" >
            <label for="Node">Node</label>
            <input type="checkbox" name="skill[]" value="JAVA" id="JAVA" >
            <label for="JAVA">JAVA</label>
            <span style ="color:red;">@error('skill'){{$message}}@enderror</span>
        </div>
        <div>
            <h4>Gender</h4>
            <input type="radio" name="gender" value="male" id="male" >
            <label for="male">male</label>
            <input type="radio" name="gender" value="female" id="male" >
            <label for="female">female</label>
            <span style ="color:red;">@error('gender'){{$message}}@enderror</span>
        </div>
        <div>
            <h4>City</h4>
            <select name="city" id="city">
                 <option value="">select</option>
                 <option value="Delhi">Delhi</option>
                 <option value="Mumbai">Mumbai</option>
                 <option value="PPune">PPune</option>
                 <span style ="color:red;">@error('city'){{$message}}@enderror</span>
            </select>
        </div>

        <div>
            <h4>age</h4>
            <input type="range" name="age" min="18" max="100">
        </div>

        <div>
            <button>Add new user</button>
        </div>
     </form>
</div>
