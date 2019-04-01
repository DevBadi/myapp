<!DOCTYPE html>
<html>
<head>
    
    <title>Projects</title>
  
</head>
<body>
   <h1>Projects => </h1> 

   @foreach ($projects as $project)
        <li>{{ $project->titel }}</li>
   @endforeach
</body>
</html>