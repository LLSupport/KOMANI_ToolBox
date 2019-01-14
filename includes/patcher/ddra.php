<!--This software was created by mon.im and was modified by Noah.-->
 <script type="text/javascript">
        window.addEventListener("load", function () {
            new DllPatcherContainer([
                new DllPatcher("gamemdx", [
                    {
                        name: "强制开启 fast/slow",
                        patches: [{offset: 0x84EC0, off: [0x8B, 0x41, 0x44], on: [0x31, 0xC0, 0x40]}]
                    },
                    {
                        name: "强制背景判定",
                        patches: [{offset: 0x84EB0, off: [0x8B, 0x41, 0x40], on: [0x31, 0xC0, 0x40]}]
                    },
                    {
                        name: "强制暗化背景",
                        patches: [
                            {offset: 0x84E84, off: [0xCC, 0xCC, 0xCC, 0xCC, 0xCC], on: [0x31, 0xC0, 0xB0, 0x03, 0xC3]},
                            {offset: 0x1AE838, off: [0x40, 0xDF, 0x0D, 0x10], on: [0x84, 0x5A, 0x08, 0x10]}
                        ]
                    },
                    {
                        name: "全曲解锁",
                        patches: [
                            //e-amusement
                            {offset: 0x86CD8, off: [0x32, 0xC0], on: [0xB0, 0x01]},
                            //event mode 
                            {offset: 0x7DEFE, off: [0x75], on: [0xEB]},
                            //ACES FOR ACES, ENDYMION
                            {offset: 0x7DF3E, off: [0x32, 0xC0], on: [0xB0, 0x01]},
                        ]
                    },
                    {
                        name: "跳过教程",
                        patches: [{offset: 0x41844, off: [0x74], on: [0xEB]}]
                    },
                    {
                        name: "时间锁定",
                        patches: [{offset: 0x23127, off: [0x74], on: [0xEB]}]
                    },
                    {
                        name: "特别选项解锁",
                        patches: [{offset: 0x73E52, off: [0x75], on: [0xEB]}]
                    },
                    {
                        name: "强制 Extra Stage/Extra Encore Stage (修复)",
                        patches: [
                            {offset: 0x5483B, off: [0x0F, 0x85], on: [0x90, 0xE9]},
                            {offset: 0x549C0, off: [0x0F, 0x85], on: [0x90, 0xE9]},
                        ]
                    },
                    {
                        name: "禁用投币",
                        patches: [
                            {offset: 0x8B8A, off: [0x74, 0x0B], on: [0xEB, 0x09]},
                            {offset: 0x8BEC, off: [0x74, 0x0B], on: [0xEB, 0x09]},
                            {offset: 0x8C4C, off: [0x74, 0x0B], on: [0xEB, 0x09]},
                            {offset: 0x8BC9, off: [0x74, 0x2E], on: [0xEB, 0x2C]},
                            {offset: 0x8C29, off: [0x74, 0x2E], on: [0xEB, 0x2C]},
                        ]
                    },
                ], "2018-04-23"),
            ]);
        });
    </script>