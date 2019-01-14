<!--This software was created by mon.im and was modified by Noah.-->
<script type="text/javascript">
        window.addEventListener("load", function () {
            new DllPatcherContainer([
                new DllPatcher("bm2dx", [
                    {
                        name: "无限曲目游玩",
                        patches: [{offset: 0x49CAC, off: [0x75], on: [0xEB]}]
                    },
                ], "2012-10-09"),
                new DllPatcher("bm2dx", [
                    {
                        name: "无限曲目游玩",
                        patches: [{offset: 0x4C47C, off: [0x75], on: [0xEB]}]
                    },
                ], "2012-12-07"),
                new DllPatcher("bm2dx", [
                    {
                        name: "无限曲目游玩",
                        patches: [{offset: 0x4E6CC, off: [0x75], on: [0xEB]}]
                    },
                ], "2013-03-05"),
                new DllPatcher("bm2dx", [
                    {
                        name: "无限曲目游玩",
                        patches: [{offset: 0x4F2DC, off: [0x75], on: [0xEB]}]
                    },
                    {
                        name: "全曲解锁",
                        patches: [{offset: 0x4921D, off: [0x75, 0x09], on: [0x90, 0x90]}]
                    },
                ], "2013-09-09"),
            ]);
        });
    </script>