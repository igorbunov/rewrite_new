@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Project</div>

                <div class="card-body">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active"
                                id="general-tab"
                                data-toggle="tab"
                                href="#general"
                                role="tab"
                                aria-controls="general"
                                aria-selected="true">General</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                                id="keywords-tab"
                                data-toggle="tab"
                                href="#keywords"
                                role="tab"
                                aria-controls="keywords"
                                aria-selected="false">Keywords</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                                id="contact-tab"
                                data-toggle="tab"
                                href="#contact"
                                role="tab"
                                aria-controls="contact"
                                aria-selected="false">Contact</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="general" role="tabpanel" aria-labelledby="general-tab">
                            @include('partials.project-general', ['project' => $project])
                        </div>
                        <div class="tab-pane fade" id="keywords" role="tabpanel" aria-labelledby="keywords-tab">
                            @include('partials.project-keywords-grid', ['project' => $project])
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            tab content
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection