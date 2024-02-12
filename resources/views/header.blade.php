<script>
    export default {
        name: 'AppHeader',
        data() {
            return {
                links: [
                    {
                        label: 'CHARACTERS',
                        link: '#',
                        current: false
                    },
                    {
                        label: 'COMICS',
                        link: '#',
                        current: true
                    },
                    {
                        label: 'MOVIES',
                        link: '#',
                        current: false
                    },
                    {
                        label: 'TV',
                        link: '#',
                        current: false
                    },
                    {
                        label: 'GAMES',
                        link: '#',
                        current: false
                    },
                    {
                        label: 'COLLECTIBLES',
                        link: '#',
                        current: false
                    },
                    {
                        label: 'VIDEOS',
                        link: '#',
                        current: false
                    },
                    {
                        label: 'FANS',
                        link: '#',
                        current: false
                    },
                    {
                        label: 'NEWS',
                        link: '#',
                        current: false
                    },
                    {
                        label: 'SHOP',
                        link: '#',
                        current: false
                    },

                ]
            }
        },
    }
    </script>

    <template lang="">
        <div class="header">
            <img src="../assets/img/dc-logo.png" alt="">
            {{-- <ul>
                <li v-for="(link, index) in links" :key="index">
                    <a :class= "link.current ? 'active' : ''" :href="link.url">
                    {{link.label}} --}}
                </a>

                </li>
            </ul>


        </div>
    </template>

    <style lang="scss" scoped>
        @use '../styles/partials/variables' as*;
        @use '../styles/generals.scss' as*;

        .header{
            display: flex;
           justify-content: space-between ;
           max-width: 991px;
           margin: 0 auto;
            ul{
                display: flex;
                list-style: none;
                align-self: center;

                li{
                    margin: 0 10px;
                    font-size: 10px;
                    font-weight: bolder;
                }
            }

        }
    </style>
