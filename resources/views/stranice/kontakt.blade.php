@extends('main')

@section('title','| Kontakt')
@section('content')
        <div class="row">
          <div class="col-md-12">
            <h1>Pisujte mi</h1>
            <hr>
            <form>
                <div class="form-group">
                    <label name="email">Email:</label>
                    <input  id="email" name="email" class="form-control">
                </div> 
                <div class="form-group">
                    <label name="subject">Naslov:</label>
                    <input  id="subject" name="subject" class="form-control">
                </div>
                <div class="form-group">
                    <label name="poruka">Poruka:</label>
                    <textarea  id="poruka" name="poruka" class="form-control"> Ovde klcaj texto...</textarea>
                </div>
                <input type="submit" value="Prati poruka" class="btn btn-success">  
            </form>    
            </div>
        </div>
        
@endsection    

