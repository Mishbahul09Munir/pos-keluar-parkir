<div class="h-screen p-6 bg-gray-100">

    <div class="grid h-full grid-cols-12 gap-4">

        <!-- FORM TRANSAKSI -->
        <div class="col-span-7 p-6 bg-white rounded shadow">
            <h2 class="mb-4 text-2xl font-bold">POS KELUAR</h2>

            @if(session()->has('success'))
                <div class="p-3 mb-4 text-green-800 bg-green-100 rounded">
                    {{ session('success') }}
                </div>
            @endif

            <div class="space-y-4">
                <input wire:model.defer="plat"
                    placeholder="Nomor Polisi"
                    class="w-full p-3 text-lg border rounded">

                <input wire:model.defer="nomorTiket"
                    placeholder="Nomor Tiket / Scan Barcode"
                    class="w-full p-3 text-lg border rounded">

                <textarea wire:model.defer="catatan"
                    placeholder="Catatan"
                    class="w-full p-3 border rounded"></textarea>

                <button wire:click="submit"
                    class="w-full py-3 text-lg text-white bg-blue-600 rounded">
                    SUBMIT TRANSAKSI (ENTER)
                </button>
            </div>
        </div>

        <!-- PANEL STATUS -->
        <div class="flex flex-col col-span-5 p-6 bg-white rounded shadow">
            <div class="mb-4">
                <strong>Operator:</strong> Demo User
            </div>

            <div class="mb-4">
                <strong>Status Gate:</strong> READY
            </div>

            <div class="flex-1 overflow-auto">
                <table class="w-full text-sm">
                    <thead>
                        <tr class="border-b">
                            <th class="text-left">Plat</th>
                            <th class="text-left">Waktu</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b">
                            <td>AA 1234 XX</td>
                            <td>10:12</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="mt-4 text-sm text-gray-500">
                F5: Tiket Hilang | F6: Cetak Ulang | F7: Logout
            </div>
        </div>

    </div>
</div>
