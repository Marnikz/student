<h1>Student List</h1>
@foreach($all_students as $student)
<h2>
{{$student->name}}
</h2>
<p>{{$student->address}}</p>
<p>{{$student->mobile}}</p>
@endforeach