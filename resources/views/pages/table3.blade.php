@extends('layouts.master')
@section('content')
    <div class="border m-4 p-3 rounded overflow-auto">
        <div class="d-md-flex justify-content-between align-items-center pb-3 border-bottom">
            <p class="h6">Form Penilaian</p>

            <div class="d-md-flex align-items-center">
                <span class="d-block mr-3">Bobot Praktikum:</span>
                <div class="mt-2 mb-3 mt-md-0 mb-md-0">
                    <span class="badge mr-2 border p-1 rounded">Pretest: 20%</span>
                    <span class="badge mr-2 border p-1 rounded">Praktikum: 20%</span>
                    <span class="badge mr-3 border p-1 rounded">Postest: 20%</span>
                </div>
                <button type="button" class="btn btn-secondary d-flex align-items-center" disabled>
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M11.0585 6.02L11.9785 6.94L2.91854 16H1.99854V15.08L11.0585 6.02ZM14.6585 0C14.4085 0 14.1485 0.1 13.9585 0.29L12.1285 2.12L15.8785 5.87L17.7085 4.04C18.0985 3.65 18.0985 3.02 17.7085 2.63L15.3685 0.29C15.1685 0.09 14.9185 0 14.6585 0ZM11.0585 3.19L-0.00146484 14.25V18H3.74854L14.8085 6.94L11.0585 3.19Z"
                            fill="white" />
                    </svg>
                    <span class="d-inline-block ml-2">Nilai</span>
                </button>
            </div>
        </div>

        <table class="table mt-4 table-bordered">
            <tr>
                <td colspan="2" class="bg-blue" style="border-top-left-radius: 1rem;"></td>
                <td class="bg-blue text-center text-white"><small>Pertemuan</small></td>
                <td colspan="9" class="bg-blue text-center text-white" style="border-top-right-radius: 1rem;"><small>1</small></td>

            </tr>
            <tr>
                <td rowspan="4" class="bg-blue"></td>
                <td rowspan="4" class="bg-blue"></td>
                <td class="bg-blue text-center text-white"><small>CPL</small></td>
                <td colspan="4" class="text-center"><small>CPL-01</small></td>

                <td colspan="5" class="text-center"><small>CPL-02</small></td>

            </tr>
            <tr>


                <td class="bg-blue text-center text-white"><small>CPMK</small></td>
                <td colspan="4" class="text-center"><small>CPMK-02</small></td>

                <td colspan="5" class="text-center"><small>CPMK-04</small></td>

            </tr>
            <tr>


                <td class="bg-blue text-center text-white"><small>Assesment</small></td>
                <td class="text-center"><small>PRE</small></td>
                <td class="text-center"><small>PRAK</small></td>
                <td class="text-center"><small>POST</small></td>
                <td class="text-center bg-light-blue"><small>SUB</small></td>
                <td class="text-center"><small>PRE</small></td>
                <td class="text-center"><small>PRAK</small></td>
                <td class="text-center"><small>POST</small></td>
                <td class="text-center bg-light-blue"><small>SUB</small></td>
                <td class="text-center bg-light-blue"><small>TOT</small></td>
            </tr>
            <tr>


                <td class="bg-blue text-center text-white"><small>Nilai Maksimal</small></td>
                <td class="text-center"><small>50</small></td>
                <td class="text-center"><small>50</small></td>
                <td class="text-center"><small>50</small></td>
                <td class="text-center bg-light-blue"><small>50</small></td>
                <td class="text-center"><small>50</small></td>
                <td class="text-center"><small>50</small></td>
                <td class="text-center"><small>50</small></td>
                <td class="text-center bg-light-blue"><small>50</small></td>
                <td class="text-center bg-light-blue"><small>50</small></td>
            </tr>
            <tr>


                <td class="bg-blue text-center text-white"><small>Nim</small></td>
                <td class="bg-blue text-center text-white"><small>Nama</small></td>
                <td class="bg-blue text-center text-white"><small>kelas</small></td>
                <td></td>
                <td></td>
                <td></td>
                <t bg-light-blued>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <t bg-light-blued>
                        </td>
                        <t bg-light-blued>
                            </td>
            </tr>
            <tr>
                <td class="text-center"><small>1800018023</small></td>
                <td class="text-center"><small>Ronald Richards</small></td>
                <td class="text-center"><small>C</small></td>
                <td class="text-center"><small>50</small></td>
                <td class="text-center"><small>50</small></td>
                <td class="text-center"><small>50</small></td>
                <td class="text-center bg-light-blue"><small>50</small></td>
                <td class="text-center"><small>50</small></td>
                <td class="text-center"><small>50</small></td>
                <td class="text-center"><small>50</small></td>
                <td class="text-center bg-light-blue"><small>50</small></td>
                <td class="text-center bg-light-blue"><small>50</small></td>
            </tr>
            <tr>
                <td class="text-center"><small>1800018023</small></td>
                <td class="text-center"><small>Ronald Richards</small></td>
                <td class="text-center"><small>C</small></td>
                <td class="text-center"><small>50</small></td>
                <td class="text-center"><small>50</small></td>
                <td class="text-center"><small>50</small></td>
                <td class="text-center bg-light-blue"><small>50</small></td>
                <td class="text-center"><small>50</small></td>
                <td class="text-center"><small>50</small></td>
                <td class="text-center"><small>50</small></td>
                <td class="text-center bg-light-blue"><small>50</small></td>
                <td class="text-center bg-light-blue"><small>50</small></td>
            </tr>
            <tr>
                <td class="text-center"><small>1800018023</small></td>
                <td class="text-center"><small>Ronald Richards</small></td>
                <td class="text-center"><small>C</small></td>
                <td class="text-center"><small>50</small></td>
                <td class="text-center"><small>50</small></td>
                <td class="text-center"><small>50</small></td>
                <td class="text-center bg-light-blue"><small>50</small></td>
                <td class="text-center"><small>50</small></td>
                <td class="text-center"><small>50</small></td>
                <td class="text-center"><small>50</small></td>
                <td class="text-center bg-light-blue"><small>50</small></td>
                <td class="text-center bg-light-blue"><small>50</small></td>
            </tr>
            <tr>
                <td class="text-center"><small>1800018023</small></td>
                <td class="text-center"><small>Ronald Richards</small></td>
                <td class="text-center"><small>C</small></td>
                <td class="text-center"><small>50</small></td>
                <td class="text-center"><small>50</small></td>
                <td class="text-center"><small>50</small></td>
                <td class="text-center bg-light-blue"><small>50</small></td>
                <td class="text-center"><small>50</small></td>
                <td class="text-center"><small>50</small></td>
                <td class="text-center"><small>50</small></td>
                <td class="text-center bg-light-blue"><small>50</small></td>
                <td class="text-center bg-light-blue"><small>50</small></td>
            </tr>
            <tr>
                <td class="text-center"><small>1800018023</small></td>
                <td class="text-center"><small>Ronald Richards</small></td>
                <td class="text-center"><small>C</small></td>
                <td class="text-center"><small>50</small></td>
                <td class="text-center"><small>50</small></td>
                <td class="text-center"><small>50</small></td>
                <td class="text-center bg-light-blue"><small>50</small></td>
                <td class="text-center"><small>50</small></td>
                <td class="text-center"><small>50</small></td>
                <td class="text-center"><small>50</small></td>
                <td class="text-center bg-light-blue"><small>50</small></td>
                <td class="text-center bg-light-blue"><small>50</small></td>
            </tr>
            <tr>
                <td class="text-center"><small>1800018023</small></td>
                <td class="text-center"><small>Ronald Richards</small></td>
                <td class="text-center"><small>C</small></td>
                <td class="text-center"><small>50</small></td>
                <td class="text-center"><small>50</small></td>
                <td class="text-center"><small>50</small></td>
                <td class="text-center bg-light-blue"><small>50</small></td>
                <td class="text-center"><small>50</small></td>
                <td class="text-center"><small>50</small></td>
                <td class="text-center"><small>50</small></td>
                <td class="text-center bg-light-blue"><small>50</small></td>
                <td class="text-center bg-light-blue"><small>50</small></td>
            </tr>
            <tr>
                <td class="text-center"><small>1800018023</small></td>
                <td class="text-center"><small>Ronald Richards</small></td>
                <td class="text-center"><small>C</small></td>
                <td class="text-center"><small>50</small></td>
                <td class="text-center"><small>50</small></td>
                <td class="text-center"><small>50</small></td>
                <td class="text-center bg-light-blue"><small>50</small></td>
                <td class="text-center"><small>50</small></td>
                <td class="text-center"><small>50</small></td>
                <td class="text-center"><small>50</small></td>
                <td class="text-center bg-light-blue"><small>50</small></td>
                <td class="text-center bg-light-blue"><small>50</small></td>
            </tr>
            <tr>
                <td class="text-center"><small>1800018023</small></td>
                <td class="text-center"><small>Ronald Richards</small></td>
                <td class="text-center"><small>C</small></td>
                <td class="text-center"><small>50</small></td>
                <td class="text-center"><small>50</small></td>
                <td class="text-center"><small>50</small></td>
                <td class="text-center bg-light-blue"><small>50</small></td>
                <td class="text-center"><small>50</small></td>
                <td class="text-center"><small>50</small></td>
                <td class="text-center"><small>50</small></td>
                <td class="text-center bg-light-blue"><small>50</small></td>
                <td class="text-center bg-light-blue"><small>50</small></td>
            </tr>
            <tr>
                <td class="text-center"><small>1800018023</small></td>
                <td class="text-center"><small>Ronald Richards</small></td>
                <td class="text-center"><small>C</small></td>
                <td class="text-center"><small>50</small></td>
                <td class="text-center"><small>50</small></td>
                <td class="text-center"><small>50</small></td>
                <td class="text-center bg-light-blue"><small>50</small></td>
                <td class="text-center"><small>50</small></td>
                <td class="text-center"><small>50</small></td>
                <td class="text-center"><small>50</small></td>
                <td class="text-center bg-light-blue"><small>50</small></td>
                <td class="text-center bg-light-blue"><small>50</small></td>
            </tr>
            <tr>
                <td class="text-center"><small>1800018023</small></td>
                <td class="text-center"><small>Ronald Richards</small></td>
                <td class="text-center"><small>C</small></td>
                <td class="text-center"><small>50</small></td>
                <td class="text-center"><small>50</small></td>
                <td class="text-center"><small>50</small></td>
                <td class="text-center bg-light-blue"><small>50</small></td>
                <td class="text-center"><small>50</small></td>
                <td class="text-center"><small>50</small></td>
                <td class="text-center"><small>50</small></td>
                <td class="text-center bg-light-blue"><small>50</small></td>
                <td class="text-center bg-light-blue"><small>50</small></td>
            </tr>
        </table>
    </div>
@endsection
