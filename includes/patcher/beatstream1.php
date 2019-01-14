<!--This software was created by mon.im and was modified by Noah.-->
        <script type="text/javascript">
            window.addEventListener("load", function() {
                new DllPatcherContainer([
                    new DllPatcher("beatstream", [
                        {
                            name: "E盘检测关闭",
                            tooltip: "修复由E盘检测带来的程序崩溃",
                            patches: [{offset: 0xB6A994, off: [0x65, 0x3A, 0x2F], on: [0x64, 0x65, 0x76]}]
                        },
                        {
                            name: "全曲解锁",
                            patches: [{
                                offset: 0x1740B6, 
                                off: [0x48, 0x83, 0xFD, 0x10, 0x72, 0x09, 0x48, 0x8D, 0x79, 0x08],
                                on: [0xBB, 0x00, 0x00, 0x00, 0x00, 0xE9, 0xAE, 0x01, 0x00, 0x00]
                            }]
                        },
                    ], "2015-12-01"),
                ]);
            });
        </script>