@extends ('layouts.app')

@section ('content')

<h1 class="py-5 text-center">MOVIES CARDS</h1>

<div class="row row-cols-5 p-5 g-3">

        

        @forelse($movies as $movie)

        <div class="col">

            <div class="card">
                
                <div class="card-body">
                    <h5 class="card-title py-2">
                       Title: {{$movie-> title}}
                    </h5>
        
                    <div class="card-title original_title">
                       <strong>Original Title: </strong> {{$movie->original_title}}
                    </div>
        
                    <div class="card-text nationality">
                        <strong> Nationality:</strong> {{$movie->nationality}}
                        
                    </div>
        
                    <div class="card-text date">
                     <strong>Date: </strong> {{$movie->date}}
                    </div>
        
                    <div class="card-text vote">
                     <strong> Vote:</strong> {{$movie->vote}}
                    </div>
        
        
                </div>  
        
            </div>
            <!-- /.card -->
            
            
        </div>
        <!-- /.col -->

        @empty
                <p>N/A</p>
        @endforelse

</div>

@endsection
    

