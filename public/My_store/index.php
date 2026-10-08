<!DOCTYPE html>
<html lang="fr" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechStore Premium | Fatima Zohra</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;700&display=swap');
        body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: #0f172a; color: white; }
        .glass { background: rgba(30, 41, 59, 0.7); backdrop-filter: blur(12px); border: 1px solid rgba(255,255,255,0.1); }
    </style>
</head>
<body class="p-6 md:p-12">

    <div class="max-w-6xl mx-auto">
        <header class="mb-12">
            <h1 class="text-5xl font-black bg-gradient-to-r from-cyan-400 to-blue-500 bg-clip-text text-transparent">
                TV Digital Store
            </h1>
            <p class="text-gray-400 mt-2 text-lg">Choisissez votre modèle et visualisez votre commande en temps réel.</p>
        </header>

        <div class="grid lg:grid-cols-3 gap-10">
            <!-- Section Selection -->
            <div class="space-y-6">
                <div class="glass p-8 rounded-[2rem] shadow-2xl">
                    <h2 class="text-xl font-bold mb-8 flex items-center gap-3 text-blue-400">
                        <i class="fas fa-desktop"></i> Sélection du Produit
                    </h2>
                    
                    <div class="space-y-6">
                        <!-- Image Preview Dynamic -->
                        <div id="preview-container" class="hidden">
                            <p class="text-xs text-gray-500 mb-2 uppercase font-bold tracking-widest">Aperçu du modèle</p>
                            <img id="tv-preview" src="" class="w-full h-40 object-contain bg-slate-800/50 rounded-2xl p-4 border border-white/5 shadow-inner">
                        </div>

                        <div>
                            <label class="block text-xs font-bold text-gray-500 mb-2 uppercase">Modèle de Téléviseur</label>
                            <select id="tv-select" onchange="updatePreview()" class="w-full bg-slate-900 border border-slate-700 rounded-2xl px-5 py-4 focus:ring-2 focus:ring-blue-500 outline-none transition-all cursor-pointer">
                                <option value="" disabled selected>-- Choisir une TV --</option>
                                <option value="14399" data-name="Samsung QLED 4K" data-img="/samsung galaxy.webp">Samsung QLED 65" (14,399 DH)</option>
                                <option value="12900" data-name="LG OLED C3" data-img="/lg.webp.jpg">LG OLED 55" (12,900 DH)</option>
                                <option value="17500" data-name="Sony Bravia XR" data-img="/sony-bravia.webp.jpg">Sony Bravia 75" (17,500 DH)</option>
                                <option value="4500" data-name="Xiaomi Smart Fire" data-img="/xiaomi-smart.webp.jpg">Xiaomi Smart 43" (4,500 DH)</option>
                            </select>
                        </div>

                        <div>
                            <label class="block text-xs font-bold text-gray-500 mb-2 uppercase">Quantité souhaitée</label>
                            <div class="flex items-center bg-slate-900 border border-slate-700 rounded-2xl p-1">
                                <button onclick="changeQte(-1)" class="w-12 h-12 flex items-center justify-center hover:bg-slate-800 rounded-xl transition">-</button>
                                <input type="number" id="quantite" value="1" min="1" class="flex-1 bg-transparent text-center font-bold outline-none" readonly>
                                <button onclick="changeQte(1)" class="w-12 h-12 flex items-center justify-center hover:bg-slate-800 rounded-xl transition">+</button>
                            </div>
                        </div>

                        <button onclick="ajouterAuPanier()" class="w-full bg-blue-600 hover:bg-blue-500 text-white font-bold py-5 rounded-2xl transition shadow-xl shadow-blue-900/40 transform active:scale-95">
                            <i class="fas fa-plus mr-2"></i> Ajouter au Panier
                        </button>
                    </div>
                </div>

                <!-- Total Display -->
                <div class="bg-gradient-to-br from-indigo-600 to-blue-700 p-8 rounded-[2rem] shadow-2xl">
                    <div class="flex justify-between items-center mb-2 opacity-80">
                        <span>Sous-total HT</span>
                        <span class="font-bold"><span id="totalHT">0</span> DH</span>
                    </div>
                    <div class="flex justify-between items-end mt-6">
                        <div>
                            <p class="text-xs uppercase font-bold opacity-60">Total à payer (TTC)</p>
                            <p class="text-4xl font-black text-yellow-300 mt-1"><span id="totalTTC">0</span><span class="text-lg ml-1">DH</span></p>
                        </div>
                        <i class="fas fa-shield-alt text-3xl opacity-20"></i>
                    </div>
                </div>
            </div>

            <!-- Liste Table -->
            <div class="lg:col-span-2">
                <div class="glass rounded-[2rem] overflow-hidden min-h-[500px] flex flex-col">
                    <div class="p-8 border-b border-white/5 flex justify-between items-center">
                        <h2 class="text-xl font-bold">Votre Panier</h2>
                        <span id="items-badge" class="bg-blue-500/20 text-blue-400 px-4 py-1 rounded-full text-xs font-bold">0 articles</span>
                    </div>

                    <div class="flex-1 p-8">
                        <table class="w-full text-left">
                            <thead class="text-gray-500 text-[10px] uppercase tracking-[0.2em]">
                                <tr>
                                    <th class="pb-6">Produit</th>
                                    <th class="pb-6">Prix Unitaire</th>
                                    <th class="pb-6">Qte</th>
                                    <th class="pb-6 text-right">Action</th>
                                </tr>
                            </thead>
                            <tbody id="panierBody" class="divide-y divide-white/5">
                                <!-- JS Injected rows -->
                            </tbody>
                        </table>
                        <div id="empty-state" class="flex flex-col items-center justify-center py-20 opacity-20">
                            <i class="fas fa-shopping-cart text-7xl mb-4"></i>
                            <p class="font-bold">Aucun produit sélectionné</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        let panier = [];

        function updatePreview() {
            const select = document.getElementById('tv-select');
            const previewImg = document.getElementById('tv-preview');
            const container = document.getElementById('preview-container');
            const selectedOption = select.options[select.selectedIndex];
            
            if (select.value) {
                previewImg.src = selectedOption.getAttribute('data-img');
                container.classList.remove('hidden');
            }
        }

        function changeQte(val) {
            let input = document.getElementById('quantite');
            let current = parseInt(input.value);
            if(current + val >= 1) input.value = current + val;
        }

        function ajouterAuPanier() {
            const select = document.getElementById('tv-select');
            const qte = parseInt(document.getElementById('quantite').value);
            
            if (!select.value) return alert("Choisissez un modèle !");

            const selected = select.options[select.selectedIndex];
            const item = {
                id: Date.now(),
                nom: selected.getAttribute('data-name'),
                prix: parseFloat(select.value),
                image: selected.getAttribute('data-img'),
                quantite: qte
            };

            panier.push(item);
            majInterface();
        }

        function supprimer(id) {
            panier = panier.filter(i => i.id !== id);
            majInterface();
        }

        function majInterface() {
            const tbody = document.getElementById('panierBody');
            const empty = document.getElementById('empty-state');
            let html = "";
            let total = 0;

            panier.forEach(item => {
                total += (item.prix * item.quantite);
                html += `
                    <tr class="group animate-in fade-in slide-in-from-bottom-2 duration-300">
                        <td class="py-6">
                            <div class="flex items-center gap-5">
                                <div class="w-20 h-16 bg-slate-800 rounded-2xl p-2 border border-white/5">
                                    <img src="${item.image}" class="w-full h-full object-contain">
                                </div>
                                <span class="font-bold text-gray-100">${item.nom}</span>
                            </div>
                        </td>
                        <td class="py-6 text-gray-400 font-medium">${item.prix.toLocaleString()} DH</td>
                        <td class="py-6"><span class="bg-white/10 px-3 py-1 rounded-lg font-bold">${item.quantite}</span></td>
                        <td class="py-6 text-right">
                            <button onclick="supprimer(${item.id})" class="text-gray-600 hover:text-red-400 transition-colors">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </td>
                    </tr>`;
            });

            tbody.innerHTML = html;
            empty.style.display = panier.length ? 'none' : 'flex';
            document.getElementById('totalHT').innerText = total.toLocaleString();
            document.getElementById('totalTTC').innerText = (total * 1.2).toLocaleString();
            document.getElementById('items-badge').innerText = `${panier.length} articles`;
        }
    </script>
</body>
</html>