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
<table class="table" style="width: 100%; margin-bottom: 40px;">
      <tr>
          <th colspan="3" align="center" style="padding-left:40%;">1er Semestre</th>
      </tr>
      <tr>
          <th>Matière</th>
          <th>Type</th>
          <th>Note</th>
      </tr>
      @if (count($notes1) === 0)
        <tr><td colspan="3" align="center">Aucune note à afficher</td></tr>
      @else
        @foreach ($notes1 as $note)
          <tr>
              <td>{!! $note['matiere'] !!}</td>
              <td>{!! $note['type'] !!}</td>
              <td>{!! $note['valeur'] !!}</td>
          </tr>
        @endforeach
      @endif

</table>
<table class="table" style="width: 100%;  ">
      <tr>
          <th colspan="3" align="center" style="padding-left:40%;">2ème Semestre</th>
      </tr>
      <tr>
          <th>Matière</th>
          <th>Type</th>
          <th>Note</th>
      </tr>
      @if (count($notes2) === 0)
        <tr><td colspan="3" align="center">Aucune note à afficher</td></tr>
      @else
        @foreach ($notes2 as $note)
          <tr>
              <td>{!! $note['matiere'] !!}</td>
              <td>{!! $note['type'] !!}</td>
              <td>{!! $note['valeur'] !!}</td>
          </tr>
        @endforeach
      @endif

</table>
@endsection
