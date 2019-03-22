@extends('pdfs.master')
@section('title', 'Absences')
@section('lastName')
{!! $lastName !!}
@endsection
@section('firstName')
{!! $firstName !!}
@endsection
@section('CIN')
{!! $etudiant['CIN'] !!}
 @endsection
@section('level')
{!! $level['val'] !!}
@endsection
@section('groupe')
{!! $level['groupe'] !!}
@endsection
@section('numInscription')
{!! $etudiant['numInscription'] !!}
@endsection
@section('teldom')
{!! $etudiant['teldom'] !!}
@endsection
@section('teletu')
{!! $etudiant['teletu'] !!}
@endsection
@section('telpere')
{!! $etudiant['telpere'] !!}
@endsection
@section('telmere')
{!! $etudiant['telmere'] !!}
@endsection
@section('annee1')
{!! $level['annee1'] !!}
@endsection
@section('annee2')
{!! $level['annee1'] + 1 !!}
@endsection

@section('dataTable')
  <table class="table" border="1">
      <tr>
          <th>Séance</th>
          <th>Date</th>
          <th>Matière</th>
          <th>Motif</th>
          <th>Appel</th>
      </tr>
    @foreach ($absences as $absence)
      <tr>
          <td>{!! $absence['seance'] !!}</td>
          <td>{!! date('d-m-Y', strtotime($absence['date'])) !!}</td>
          <td>{!! $absence['matiere'] !!}</td>
          <td>{!! $absence['motif'] !!}</td>
          <td>{!! $absence['appel'] !!}</td>
      </tr>
    @endforeach
    </table>
@endsection
