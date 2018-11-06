@extends('layouts.front')

@section('content')

<div class="wrapper">
<form action="">
    <div id='create_header' class="create_header">
        <h1>Administration Section Creator</h1>
        <p>Welcome to Project Manager program. Before getting started, Kindly read the steps and fill required information. You will get 60% code of your project's Admin section in just few minutes.</p>
    </div>
    <div id="wizard">
        <!-- SECTION 1 -->
        <h4>Step 1</h4>
        @include('project.basic_info')

        <!-- SECTION 2 -->
        <h4>Step 2</h4>
        @include('project.framework')
      
        <!-- SECTION 3 -->
        <h4>Step 3</h4>
        @include('project.admin_setting')

       <!-- SECTION 4 -->
       <h4>Step 4</h4>
        @include('project.modules')                    

        <!-- SECTION 5 -->
        <h4>Step 5</h4>
        @include('project.template')
      
        
        <h4>Step 6</h4>
        @include('project.dblayout')                    
       
    </div>
</form>

<div class="sidebar">
<ul>
<li>1 Basic info</li>
<li>1 Basic info</li>
<li>1 Basic info</li>
<li>1 Basic info</li>
<li>1 Basic info</li>

</ul>
</div>

</div>
@endsection