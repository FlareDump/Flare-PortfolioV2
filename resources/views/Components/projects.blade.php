<div class="flex min-h-screen flex-col items-center justify-center">
    <h2
        class="hide-top font-primary text-textPrimary mb-10 text-center text-3xl font-bold sm:text-4xl md:text-left md:text-5xl">
        Projects</h2>

    <div class="hide-right flex flex-col gap-5 space-y-5 sm:flex-row sm:flex-wrap">
        {{-- prettier-ignore --}}
        <x-ui.project-card 
        image="assets/sti.png"
        title="STI Gearpoint"
        subtitle="Kiosk Machine System for STI Gears"
        url="https://github.com/FlareDump/GearPoint" />

        {{-- prettier-ignore --}}
        <x-ui.project-card 
        image="assets/Brewtique.png"
        title="Brewtique"
        subtitle="Coffee Shop Wesbite + Admin Dashboard"
        url="https://github.com/FlareDump/Brewtique" />

        {{-- prettier-ignore --}}
        <x-ui.project-card 
        image="assets/NekoDesu.png"
        title="NekoDesu"
        subtitle="Food Menu / Recipe website"
        url="https://github.com/FlareDump/NekoDesu" />
    </div>


</div>
