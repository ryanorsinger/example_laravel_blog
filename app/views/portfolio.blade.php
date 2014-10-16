@extends('layouts.master')

@section('content')
<div>
    <h2>My Awesome Portfolio</h2>

    <h4>My Awesome Portfolio is Awesome</h4>

    <ul>
        <h5>Web Applications</h5>
        <li>Captix Events - Automated Events Management System</li>
        <li>Converting Architectural Data to Geospacial GIS layers with FME</li>
        <li>Company Intranet with SharePoint</li>
        <li>Onboarding Automation with Dynamics CRM</li>
    </ul>
    <ul>
        <h5>Personal Projects</h5>
        <li>MeteorJS - Microscope Mini-Reddit Clone</li>
        <li>CRBO - Computer Refurbisher's Back Office</li>
        <li>Converting Architectural Data to Geospacial GIS layers with FME</li>
        <li>Company Intranet with SharePoint</li>
        <li>Onboarding Automation with Dynamics CRM</li>
    </ul>

    <h2>{{ HTML::linkRoute('resume', 'Resume') }}</h2>

    <p>{{ HTML::linkRoute('home', 'Go to Home Page') }}</p>
</div>
@stop
