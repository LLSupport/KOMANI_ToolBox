<!--This software was created by mon.im and was modified by Noah.-->
<script type="text/javascript">
            window.addEventListener("load", function() {
                new DllPatcherContainer([
                    new DllPatcher("beatstream", [
                        {
                            name: "E盘检测关闭",
                            tooltip: "修复由E盘检测带来的程序崩溃",
                            patches: [{offset: 0x8645FC, off: [0x65, 0x3A, 0x2F], on: [0x64, 0x65, 0x76]}]
                        },
                        {
                            name: "全曲解锁",
                            patches: [{
                                offset: 0x16CCB1, 
                                off: [0x48, 0x83, 0xFD, 0x10, 0x72, 0x03, 0x48, 0x8B, 0x09, 0x41],
                                on: [0xBE, 0x00, 0x00, 0x00, 0x00, 0xE9, 0x3A, 0x01, 0x00, 0x00]
                            }]
                        },
                        {
                            name: "NIGHTMARE 难度解锁",
                            patches: [{
                                offset: 0x16EADE, 
                                off: [0x8B, 0xCB, 0xE8, 0xDB, 0xB4, 0x0E],
                                on: [0xB0, 0x01, 0xE9, 0xAD, 0x00, 0x00]
                            }]
                        },
                    ], "2016-11-14"),
                ]);
            });
        </script>