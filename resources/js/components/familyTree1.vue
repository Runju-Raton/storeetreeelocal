    <template>
            <div>
                <!-- <pre>{{trees}}</pre> -->
                <div id="tree" ref="tree"></div>
            </div>
        </template>

        <script>

            import FamilyTree from '@balkangraph/familytree.js'

            export default {
                props: ['datas'],
                name: 'tree',
                data() {
                    return {
                        trees:[],
                        nodes: [

                            
                             { id: 7, mid: 1, fid: 2, name: "Peter Stevens7", gender: "male", img: "https://cdn.balkan.app/shared/m10/2.jpg" },
                            { id: 9, pids:[8], mid: 1, fid: 2, name: "Emma Stevens9", gender: "female", img: "https://cdn.balkan.app/shared/w10/3.jpg" },
                            { id: 8, pids:[9], mid: 3, fid: 6, name: "Savin Stevens8", gender: "male", img: "https://cdn.balkan.app/shared/m10/1.jpg"  },

                            { id: 1, pids: [2], name: "Amber McKenzie1", gender: "female", img: "https://cdn.balkan.app/shared/2.jpg"  },
                            { id: 2, pids: [1], name: "Ava Field2", gender: "male", img: "https://cdn.balkan.app/shared/m30/5.jpg" },
                            { id: 3, pids: [6], name: "Amber McKenzie3", gender: "female", img: "https://cdn.balkan.app/shared/2.jpg"  },
                            { id: 4, pids: [5], name: "Ava Field4", gender: "male", img: "https://cdn.balkan.app/shared/m30/5.jpg" },
                            { id: 5, pids: [4], name: "Amber McKenzie5", gender: "female", img: "https://cdn.balkan.app/shared/2.jpg"  },
                            { id: 6, pids: [3], name: "Ava Field6", gender: "male", img: "https://cdn.balkan.app/shared/m30/5.jpg" },

                             { id: 10, name: "Stand Alone", gender: "male", img: "https://cdn.balkan.app/shared/m10/2.jpg" },

                           
                            

                            // { id: 8, pids: [9], mid: 6, fid: 3, name: "Savin Stevens", gender: "male", img: "https://cdn.balkan.app/shared/m10/1.jpg"  },
                            // { id: 9, pids: [8], mid: 1, fid: 2, name: "Emma Stevens", gender: "female", img: "https://cdn.balkan.app/shared/w10/3.jpg" }
                        ]
                    }
                },

                methods: {
                    callHandler:function(nodeId){
                        console.dir(nodeId);
                    },
                    mytree: function(domEl, x) {
                        this.family = new FamilyTree (domEl, {
                            nodes: x,
                            nodeBinding: {
                                field_0: "name",
                                img_0: "img",
                                field_1: "title",
                            },
                            enableSearch: false,
                            // enableEditForm: false,
                            // nodeTreeMenu: true,
                            
                            template: 'john',


                            // nodeContextMenu  :{

                            // },
                            // nodeTreeMenu:{

                            // },
                            // menu:{

                            // },
                            // nodeMouseClick:FamilyTree.action.nodeMenu,
                            // scaleInitial:FamilyTree.match.boundary,
                            showXScroll: FamilyTree.scroll.visible,
                            showYScroll: FamilyTree.scroll.visible,
                            mouseScrool: FamilyTree.action.ctrlZoom,
                            mouseScroolBehaviour: FamilyTree.action.none,
                            mouseDragBehaviour: FamilyTree.action.none,
                            // scaleInitial:FamilyTree.match.width,
                            // zoom:false,
                            // nodeMenuUI:,
                            // nodeMenu: {
                            //     onClick: this.callHandler
                            // },
                            nodeMenu: {
                                
                                call: {
                                    icon: FamilyTree.icon.user(18, 18, '#039BE5'),
                                    text: "View Profile",
                                    onClick: this.callHandler
                                }

                            },

                            editForm: {
                            buttons: {
                                user: {
                                    icon: FamilyTree.icon.details(18,18,'#fff'),
                                    text: 'Profile View'
                                },
                                edit: null,
                                share: null,
                                pdf: null,
                                remove: null
                            }
                        },
                        });
                        // this.family.on('init', function (sender) { sender.editUI.show(1, true); });
                        this.family.editUI.on('button-click', function (sender, args) {
                                if (args.name == 'user') {
                                    window.open('/family/member/'+args.nodeId);
                                }
                            });

                    },
                    reArrangeData(){
                        // console.dir(this.datas);
                        this.datas.forEach(dataInfo=>{
                            // console.dir(dataInfo);
                        })
                    },
                },

                mounted(){
                     // console.dir(this.trees);
                    this.trees = JSON.parse(this.datas);
                    // this.reArrangeData();
                    // console.dir(this.trees);
                    // this.trees=Object.entries(this.trees);
                    // this.mytree(this.$refs.tree, this.nodes);
                    this.mytree(this.$refs.tree, this.trees);

                    
                }
            }
        </script>

<style scoped>
.bft-search{
        display: none !important;
    }
</style>
