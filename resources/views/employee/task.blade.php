<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Task') }}
        </h2>
    </x-slot>

    <div class="container mt-2">
        <div class="row">
            <div class="col bg-white p-3">
               
                <form class="mt-3">
                    <h5 class="text-center"><b>INDIVIDUAL PERFORMANCE COMMITMENT AND REVIEW (IPCR)</b></h5>
                    <div class="form-row align-items-center mt-4">
                        <div class="col-auto form-inline">
                           <p>I, <input type="text" class="form-control mb-2">. of  the <input type="text" class="form-control mb-2"> Division of <input type="text" class="form-control mb-2">
                            commit to deliver and agree to be rated on the attainment of the following targets targets in accordance with 
                            the indicate  measure for the period  <input type="date" class="mb-2"> to  <input type="date" class="mb-2"> , <input type="date" class="mb-2">.
                            </p>
                        </div>
                    </div>
                   
                    <table class="table table-bordered">
                    <tr>
                        <td rowspan="2" class="text-center">Output</td>
                        <td rowspan="2" class="text-center">Success Indicator(Target + Measure)</td>
                        <td rowspan="2" class="text-center">Actual Accomplishments</td>
                        <td colspan="4" class="text-center">Rating</td>
                        <td rowspan="2" class="text-center">Remarks</td>
                    </tr>
                    <tr class="text-center">
                        <td>Q<sup>1</sup></td><td>E<sup>2</sup></td><td>T<sup>3</sup></td><td>A<sup>4</sup></td>
                    </tr>
                    <tr>
                        <td colspan="2"><b> Reviewed by:</b></td>
                        <td >Date: <td colspan="4">Approved by:</td> </td> 
                        <td class="text-center">Date:</td>
                    </tr>
                    <tr>
                        <td colspan="3" class="text-center"><b>Immediate Supervisor</b></td>
                        <td colspan="5" class="text-center"><b>Head Office</b></td>
                    </tr>
                    </table>



                    <button type="button" class="btn btn-primary">+ Add Accomplishments</button>
                    <button type="button" class="btn btn-danger">*Print</button>

                </form>
            </div>
        </div>
    </div>
</x-app-layout>
